from flask import Flask,request, url_for, redirect, render_template
import pickle
import numpy as np

app = Flask(__name__)
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

    
@app.route('/login',methods=['POST','GET'])
def login():
    return render_template('login.php')
@app.route('/logout',methods=['POST','GET'])
def logout():
    return render_template('logout.php')

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
'''@app.route('/login', methods=['GET', 'POST'])
def login():
    if request.method == 'POST':
        email = request.form.get('email')
        password = request.form.get('password')

        user = User.query.filter_by(email=email).first()
        if user:
            if check_password_hash(user.password, password):
                flash('Logged in successfully!', category='success')
                login_user(user, remember=True)
                return redirect(url_for('views.home'))
            else:
                flash('Incorrect password, try again.', category='error')
        else:
            flash('Email does not exist.', category='error')

    return render_template("login.html", user=current_user)

'''
'''@login_required
def home():
    if request.method == 'POST':
        note = request.form.get('note')

        if len(note) < 1:
            flash('Note is too short!', category='error')
        else:
            new_note = Note(data=note, user_id=current_user.id)
            db.session.add(new_note)
            db.session.commit()
            flash('Note added!', category='success')

    return render_template("home.html", user=current_user)


@views.route('/delete-note', methods=['POST'])
def delete_note():
    note = json.loads(request.data)
    noteId = note['noteId']
    note = Note.query.get(noteId)
    if note:
        if note.user_id == current_user.id:
            db.session.delete(note)
            db.session.commit()

    return jsonify({})'''

#########

if __name__ == '__main__':
    app.run(debug=True)
