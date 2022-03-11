    <section class="contact">
        <h1 class="text-center">Contact Us</h1>
        <form action="connect.php" method="post">
        <div class="form">
            <input class="form-input"  type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input"  type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input"  type="email" name="email" id="name" placeholder="Enter Your email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10" placeholder="Enter Your Query"></textarea>
            <button class="btn btn-sm btn-dark">Submit</button>
        </div>
        </form>
    </section>

.form{
    max-width: 500px;
    margin: 25px auto;
}

.text-center{
    text-align: center;
    padding: 10px;
}

.btn{
    display: inline-block;
    padding: 10px 20px;
    margin: 8px 3px;
    border: 2px solid white;
    border-radius: 8px;
    background: none;
    color: white;
    cursor: pointer;
}

.btn-sm{
    padding: 7px 10px;
    vertical-align: middle;
}

.btn-dark{
    color: black;
    border: 3px solid black;
}