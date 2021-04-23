{% include 'header.html' %}
    {% include 'navbar.html' %}

 <div class="container main_container">
    {% with messages = get_flashed_messages(with_categories=true) %}
  {% if messages %}
    {% for category, message in messages %}
      <div class="alert alert-{{ category }}">{{ message }}</div>
    {% endfor %}
  {% endif %}
{% endwith %}

{% if error %}
  <div class="alert alert-danger">{{error}}</div>
{% endif %}

{% if msg %}
  <div class="alert alert-success">{{msg}}</div>
{% endif %}     
      <h1>Login</h1>
  <form action="" method="POST">
    <div class="form-group">
      <label>Username</label>
      <input type="text" name="username" class="form-control" value={{request.form.username}}>
    </div>
    <div class="form-group">
      <label>Password</label>
      <input type="password" name="password" class="form-control" value={{request.form.password}}>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="//cdn.ckeditor.com/4.6.2/basic/ckeditor.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace('editor')
    </script>

    {% include 'footer.html' %}