<style type="text/css">
  * {
    margin: 0;
    padding: 0;
    border: 0;
  }

  @font-face {
    font-family: "Gentona Book";
    src: url(../fonts/gentona-book.otf) format("opentype");
  }

  @font-face {
    font-family: "Gentona Light";
    src: url(../fonts/gentona-light.otf) format("opentype");
  }

  @font-face {
    font-family: "Gentona Thin";
    src: url(../fonts/gentona-thin.otf) format("opentype");
  }

  header {
      background-color: #00529b;
      padding: 20px 10px 10px 10px;
      position: fixed;
      width: 100%;
      top: 0;
      z-index: 99;
  }

  header nav a {
    color: #ffffff;
    text-decoration: none;
    padding: 5px;
  }

  header nav ul li {
      display: inline;
      margin: 0 20px;
      font-family: "Gentona Light", sans-serif;
      font-size: 20px;
  }

  header > a {
      display: inline-block;
      width: 20%;
  }

  .top-logo,
  nav {
    display: inline-block;
  }

  nav a:hover{
    color: #f2a06a;
    text-decoration: underline;
  }

  .bar {
    text-align: right;
    margin-right: 40px;
    width: 70%;
    display: inline-block;
    vertical-align: top;
    margin-top: 25px;
  }

  header > a {
      display: inline-block;
      width: 20%;
  }

  .reply-form {
    max-width: 500px;
    margin: 0 auto;
    padding-top: 250px;
    padding-bottom: 500px;
  }

  .reply-form p {
    font-family: "Gentona Light", sans-serif;
    font-size: 18px;
  }

  h1 {
    font-family: "Gentona Light", sans-serif;
    font-size: 36px;
    color: #f37021;
    text-align: center;
    padding: 20px 0;
  }

  footer {
      background-color: #00529b;
      padding: 40px 0px;
      width: 100%;
      position: relative;
      bottom: 0;
      text-align: center;
      z-index: 98;
  }

  footer a {
    color: #ffffff;
    font-size: 32px;
    margin: 0 5px;
    transition: .3s;
  }

  footer a:hover {
    color: #f2a06a;
    transition: .3s;
  }

  footer p {
    font-family: "Gentona Light", sans-serif;
    color: #ffffff;
    font-size: 24px;
  }

</style>

<!--Font Awesome-->
<script src="https://kit.fontawesome.com/00c1af50d4.js" crossorigin="anonymous"></script>

<header>
  <a href="https://education.ufl.edu/ufli" target="_blank"> <img class="top-logo" src="images/ufli-logo-wide.png" alt="UFLI logo" width="300"></a>
  <div class="bar">
    <nav>
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="resources.html">Resources</a></li>
        <li><a href="programs.html">Programs</a></li>
        <li><a href="about.html">About</a>
        <li><a href="contact.html">Contact</a>
      </ul>
    </nav>
  </div>
</header>

<div class="reply-form">
  <h1>Thank you for contacting us!</h1>
  <p>Thanks for your interest. We have received your message, and we will be in touch shortly.</p>
</div>

<footer>
  <p>Follow UFLI on social media:
    <a href="https://facebook.com/UFLiteracy" target="_blank"><i class="fab fa-facebook-square"></i></a>
    <a href="https://twitter.com/UFLiteracy" target="_blank"><i class="fab fa-twitter-square"></i></a>
    <a href="https://youtube.com.com" target="_blank"><i class="fab fa-youtube-square"></i></a>
  </p>
</footer>
