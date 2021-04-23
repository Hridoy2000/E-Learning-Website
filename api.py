from flask import Flask, render_template, flash, redirect, url_for, session, request, logging
import pickle
import numpy as np
from flask_mysqldb import MySQL
from wtforms import Form, StringField, TextAreaField, PasswordField, validators
from passlib.hash import sha256_crypt
from functools import wraps
from flask_bcrypt import Bcrypt


app = Flask(__name__)
app.config['MYSQL_HOST'] = 'localhost'
app.config['MYSQL_USER'] = 'root'
app.config['MYSQL_PASSWORD'] = ''
app.config['MYSQL_DB'] = 'student'
app.config['MYSQL_CURSORCLASS'] = 'DictCursor'
# init MYSQL
bcrypt = Bcrypt(app)
mysql = MySQL(app)

def is_logged_in(f):
    @wraps(f)
    def wrap(*args, **kwargs):
        if 'logged_in' in session:
            return f(*args, **kwargs)
        else:
            flash('Unauthorized, Please login', 'danger')
            return redirect(url_for('login'))
    return wrap
    

model=pickle.load(open('model.pkl','rb'))
@app.route('/')

def homepage():
    return render_template('homepage.php')
@app.route('/deeplearning',methods=['POST','GET'])
def deeplearning():
    return render_template('introduction_dl.php')

@app.route('/machinelearning',methods=['POST','GET'])
def machinelearning():
    return render_template('Introduction_ml.php')

@app.route('/python',methods=['POST','GET'])
def python():
    return render_template('Introduction_py.php')
@app.route('/robotics',methods=['POST','GET'])
def robotics():
    return render_template('introduction_robotic.php')

@app.route('/ai',methods=['POST','GET'])
def ai():
    return render_template('Introduction_ai.php')


@app.route('/logout')
@is_logged_in
def logout():
    session.clear()
    flash('You are now logged out', 'success')
    return redirect(url_for('login'))

class RegisterForm(Form):
    name = StringField('Name', [validators.Length(min=1, max=50)])
    username = StringField('Username', [validators.Length(min=4, max=25)])
    email = StringField('Email', [validators.Length(min=6, max=50)])
    password = PasswordField('Password', [
        validators.DataRequired(),
        validators.EqualTo('confirm', message='Passwords do not match')
    ])
    confirm = PasswordField('Confirm Password')



@app.route('/login',methods=['POST','GET'])
def login():
    if request.method == 'POST':
        # Get Form Fields
        username = request.form['username']
        password_candidate =request.form['password']

        # Create cursor
        cur = mysql.connection.cursor()

        # Get user by username
        result = cur.execute("SELECT * FROM users WHERE username = %s", [username])
        if result > 0:
            # Get stored hash
            data = cur.fetchone()
            password = data['password']
            print(password+"\n"+password_candidate)
            # Compare Passwords
            if ((password_candidate == password)):
               

                session['logged_in'] = True
                session['username'] = username

                flash('You are now logged in', 'success')
                return redirect(url_for('homepage'))
            else:
                error = 'Invalid login'
                return render_template('login.php', error=error)
            # Close connection
            cur.close()
        else:
            error = 'Username not found'
            return render_template('login.php', error=error)

    return render_template('login.php')


@app.route('/signUp',methods=['POST','GET'])
def signUp():
    form = RegisterForm(request.form)
    if request.method == 'POST' and form.validate():
        name = form.name.data
        email = form.email.data
        username = form.username.data
        password = form.password.data

        # Create cursor
        cur = mysql.connection.cursor()

        # Execute query
        cur.execute("INSERT INTO users(name, email, username, password) VALUES(%s, %s, %s, %s)", (name, email, username, password))

        # Commit to DB
        mysql.connection.commit()

        # Close connection
        cur.close()
        
        flash('You are now registered and can log in', 'success')

        return redirect(url_for('login'))
    return render_template('register.html', form=form)


@app.route('/project',methods=['POST','GET'])
def project():
    return render_template('project.php')

@app.route('/forest_fire',methods=['POST','GET'])
def forest_fire(): 
    return render_template('forest_fire.php')

@app.route('/predict',methods=['POST','GET'])
def predict():
    int_features=[int(x) for x in request.form.values()]
    final=[np.array(int_features)]
    print(int_features)
    print(final)
    prediction=model.predict_proba(final)
    output='{0:.{1}f}'.format(prediction[0][1], 2)

    if output>str(0.5):
        return render_template('forest_fire.php',pred='Your Forest is in Danger. Probability of fire occuring is {}'.format(output),b="")
    else:
        return render_template('forest_fire.php',pred='Your Forest is safe. Probability of fire occuring is {}'.format(output),b="")
@app.route('/code_description',methods=['POST','GET'])
def code_description(): 
    return render_template('code_description.html')






###########
 


 
 
#########

if __name__ == '__main__':
    app.secret_key='secret123'
    app.run(debug=True)