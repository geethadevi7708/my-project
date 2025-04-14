<?php
include('db.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Images</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(135deg, #ffe6e6, #e6f2ff);
      font-family: 'Roboto', sans-serif;
    }

    .header {
      text-align: center;
      padding: 40px;
      background-color: #fff0f5;
      border-bottom: 3px solid #ff9999;
    }

    .header h1 {
      font-family: 'Playfair Display', serif;
      font-size: 48px;
      color: #cc0066;
      margin: 0;
    }

    .image-container {
      text-align: center;
      margin: 30px 0;
    }

    img {
      height: 300px;
      width: 500px;
      border: 10px double #cc99ff;
      border-radius: 15px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    .content {
      background-color: #ffffff;
      margin: 30px auto;
      padding: 30px;
      width: 80%;
      font-size: 18px;
      line-height: 1.6;
      border-left: 5px solid #ff6666;
      border-right: 5px solid #ff6666;
      border-radius: 10px;
    }

    ul {
      list-style-type: none;
      margin: 0;
      padding: 15px;
      background-color: #333;
      text-align: center;
    }

    li {
      display: inline;
      margin: 0 20px;
    }

    li a {
      color: #fff;
      text-decoration: none;
      font-weight: bold;
      font-size: 18px;
      padding: 8px 16px;
      border-radius: 5px;
      transition: background-color 0.3s ease;
    }

    li a:hover {
      background-color: #ff6699;
    }

    /* Decorative line drawing */
    .line-art {
      width: 100px;
      height: 5px;
      background-color: #cc0066;
      margin: 20px auto;
      border-radius: 5px;
    }
  </style>
</head>
<body>

<div class="header">
  <h1>THE STYLISH BEAUTY</h1>
  <div class="line-art"></div>
</div>

<div class="image-container">
  <img src="make1.jpg" alt="restaurant" width="300" height="400">
</div>

<div class="content">
To inspire you and remind you that beauty is everywhere. Enjoy! Because of your smile, you make life more beautiful. Thich Nhat Hanh Beauty in things exists in the mind which contemplates them. David Hume The seeds of beauty are in humility.
 </div>

<ul>
  <li><a href="home5.html">Home</a></li>
  <li><a href="login2.html">Courses</a></li>
  <li><a href="contact.asp">Contact</a></li>
  <li><a href="about.asp">About</a></li>
</ul>

</body>
</html>
LOGIN CODE:
<!DOCTYPE html>
<html>
<head>
  <title>STYLISH BEAUTY - Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Roboto&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(120deg, #ffe6f0, #e0f7fa);
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      font-family: 'Playfair Display', serif;
      color: #cc0066;
      font-size: 48px;
      margin-top: 40px;
    }

    img {
      width: 200px;
      height: 200px;
      border-radius: 50%;
      border: 5px solid #cc99ff;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      margin: 20px 0;
    }

    .login-form {
      background-color: #ffffff;
      padding: 30px;
      border-radius: 15px;
      box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    .login-form h2 {
      text-align: center;
      color: #333;
      margin-bottom: 20px;
    }

    .login-form input[type="text"],
    .login-form input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 8px;
    }

    .login-form input[type="submit"] {
      width: 100%;
      background-color: #ff66b2;
      color: white;
      border: none;
      padding: 10px;
      border-radius: 8px;
      font-weight: bold;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .login-form input[type="submit"]:hover {
      background-color: #cc0066;
    }

    .footer {
      margin-top: 40px;
      font-size: 14px;
      color: #777;
    }
  </style>
</head>
<body>

  <h1>STYLISH BEAUTY</h1>
  <img src="make3.jpg" alt="Makeup Logo">
  <div class="login-form">
    <h2>Login</h2>
    <form action="login.html" method="post">
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      <input type="submit" value="Login">
    </form>
  </div>

  <div class="footer">
    © 2025 Stylish Beauty. All rights reserved.
  </div>

</body>
</html>

WELCOME PAGE
<!DOCTYPE html>
<html>
<head>
  <title>Welcome</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #fbd3e0;
      text-align: center;
      padding: 80px;
      margin: 0;
    }
    h1 {
      color: #cc0066;
      font-size: 36px;
    }
    p {
      font-size: 20px;
      color: #333;
      margin-top: 10px;
    }
    .next-btn {
      background-color: #ff80ab;
      font-size: 18px;
      padding: 12px 24px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-top: 30px;
      transition: background-color 0.3s ease;
    }
    .next-btn:hover {
      background-color: #ff3385; 
    }
    img {
      width: 150px;
      height: 150px;
      object-fit: cover;
      margin-bottom: 20px;
      border-radius: 50%;
    }
  </style>
</head>
<body>

  <img src="cart7.jpg" alt="Logo" height="500",width="300">
  <h1>Welcome to Stylish Beauty!</h1>
  <p>You have successfully logged in.</p>
  
    <a href="login2.html" class="add-to-cart">Next</a> <!-- Link to login page>

</body>
</html>





COURSES OFFRED

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   <style>
    body {
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #ffe6f0, #fdf0ff);
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
    }

    h1 {
      text-align: center;
      font-size: 2em;
      color: #b30059;
      margin-top: 40px;
      margin-bottom: 30px;
      letter-spacing: 2px;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 30px;
      padding: 0 40px 60px;
    }

    .card {
      background: white;
      border-radius: 20px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 30px rgba(0, 0, 0, 0.2);
    }

    .card img {
      width: 100%;
      height: 250px;
      object-fit: cover;
      border-bottom: 3px solid #f48fb1;
    }

    .card p {
      font-size: 1.2em;
      font-weight: bold;
      color: #880e4f;
      margin: 20px 10px;
      text-align: center;
    }

    @media (max-width: 600px) {
      .card img {
        height: 200px;
      }

      h1 {
        font-size: 2em;
      }

      .card p {
        font-size: 1em;
      }
    }
  </style>
</head>
<body>

  <h1>COURSES OFFERED</h1>

  <div class="grid">
    <div class="card">
      <img src="facial.jpg" alt="Facial">
      <p>FACIAL</p>
    </div>
    <div class="card">
      <img src="marry.jpg" alt="Marriage look">
      <p>MARRIAGE PACKAGE</p>
    </div>
    <div class="card">
      <img src="hair.jpg" alt="Hair braiding">
      <p>HAIR BRAIDING</p>
    </div>
    <div class="card">
      <img src="haircolour.jpg" alt="Threading">
      <p>Hair colour</p>
    </div>
    <div class="card">
      <img src="mehandhi.jpg" alt="Mehandhi art">
      <p>MEHANDHI ART</p>
    </div>
    <div class="card">
      <img src="cutting.jpg" alt="Hair cutting">
      <p>HAIR CUTTING</p>
    </div>
    <div class="card">
      <img src="eye.jpg" alt="Eye makeup">
      <p>EYE MAKEUP</p>
    </div>
    <div class="card">
      <img src="lip1.jpg" alt="Lip art">
      <p>LIP ART</p>
    </div>
    <div class="card">
      <img src="modern1.jpg" alt="Lip art">
      <p>MODERN LOOK</p>
    </div>
    <div class="card">
      <img src="nail.jpg" alt="Lip art">
      <p>NAIL ART</p>
    </div>

  </div>

</body>
</html>

NEWS:
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <center>
  <h1>NEWS UPDATE</h1>
  </center>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600&family=Open+Sans&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Open Sans', sans-serif;
      background: #f8c6d0; 
      color: #3a1f2e; 
      line-height: 1.6;
    }

    section {
      display: flex;
      height: 100vh;
      padding: 40px;
      align-items: center;
      justify-content: space-between;
      border-bottom: 2px solid #b85c79;
    }

    .text {
      flex: 1;
      padding: 30px;
      background-color: #fff0f5;
      border-radius: 15px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin-right: 30px;
    }

    .text h2 {
      font-family: 'Playfair Display', serif;
      font-size: 2.2em;
      margin-bottom: 15px;
      color: #4b2b3a;
    }

    .text p {
      font-size: 1.1em;
      color: #3a1f2e;
    }

    .image {
      flex: 1;
    }

    .image img {
      width: 100%;
      height: 80vh;
      object-fit: cover;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
      section {
        flex-direction: column;
        height: auto;
      }

      .text, .image {
        width: 100%;
        margin: 15px 0;
      }

      .image img {
        height: auto;
      }
    }
  </style>
</head>
<body>

  <!-- Section 1: Cleansing -->
  <section>
    <div class="text">
      <h2>Cleansing</h2>
      <p>Morning and night, gently wash your face using a mild cleanser. Natural options like raw honey, milk, or gram flour with yogurt are great for removing dirt, oil, and makeup while keeping your skin nourished and fresh.</p>
      <p>Sunscreen: It's essential for protecting the skin against the damaging effects of the sun.</p>
    </div>
    <div class="image">
      <img src="skiny2.jpg" alt="Cleansing">
    </div>
  </section>

  <!-- Section 2: Fruits -->
  <section>
    <div class="text">
      <h2>Fruits for Glowing Skin</h2>
      <p>Incorporate fruits like papaya, oranges, berries, kiwis, and watermelon in your diet. They're rich in vitamins A, C, and E, plus antioxidants that help your skin glow naturally from within.</p>
      <h3>Oranges</h3>
<p>Packed with vitamin C, which is an antioxidant that supports collagen production, reduces inflammation, and fights free radicals. </p>
<h4>Berries</h4>
<p>High in antioxidants and vitamin C, which helps brighten skin and reduce the appearance of dark spots</p> 
<h5>Watermelon</h5>
<p>Hydrating and rich in vitamins A and C, which help maintain skin hydration and promote a radiant complexion</p>
    </div>
    <div class="image">
      <img src="veg.jpg" alt="Fruits for Glowing Skin">
    </div>
  </section>

  <!-- Section 3: Water -->
  <section>
    <div class="text">
      <h2>Stay Hydrated</h2>
      <p>Drink around 2-3 liters of water daily to flush out toxins, improve skin elasticity, and support cell regeneration. Hydrated skin is softer, clearer, and naturally radiant.</p>
      <p>That water drinking is vital for healthy hydration isn’t exactly breaking news. But here’s some common myth-busting: drinking water doesn’t hydrate your skin. Water drinking does flush your digestive system as it runs through your intestines, it’s absorbed into your bloodstream, is then filtered by your kidneys and ultimately it will hydrate the cells inside your body.</p>
    </div>
    <div class="image">
      <img src="watery.jpg" alt="Stay Hydrated">
    </div>
  </section>

  <!-- Section 4: Hair Care -->
  <section>
    <div class="text">
      <h2>Hair Care Routine</h2>
      <p>Handle your hair gently, choose suitable products, and wash regularly. Avoid heat tools, nourish with serums or oils, and maintain a healthy diet to support shiny, strong hair.</p>
      <p>Additional Tips:
Eat a healthy diet:
Ensure you're consuming a balanced diet rich in protein, vitamins, and minerals to support healthy hair growth, according to Nykaa and Healthline. </p>
<p>Manage stress:
Stress can impact hair growth, so practice stress-reducing techniques like meditation or yoga.</p>
<p>Regular Trims:
Get your hair trimmed every 6-8 weeks to remove split ends and promote healthier, longer hair, according to The Earth Collective and Healthline. </p>

    </div>
    <div class="image">
      <img src="hairee.jpg" alt="Hair Care">
    </div>
  </section>

</body>
</html>  

CART:
<!DOCTYPE html>
<html>
<head>
  <title>Stylish Beauty Cart</title>
  <style>
    body {
      font-family: Arial, sans-serif;
    }
    h2 {
      text-align: center;
    }
h1{
      text-align:left;
}
    .category {
      margin: 30px;
    }
    .product-row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
    }
    .product-card {
      width: 220px;
      border: 1px solid #ddd;
      border-radius: 10px;
      padding: 10px;
      text-align: center;
      box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
    }
    .product-card img {
      width: 200px;
      height: 200px;
      object-fit: cover;
      border-radius: 8px;
    }
    .price {
      margin: 10px 0;
      font-weight: bold;
      color: #333;
    }
    .add-to-cart {
      background-color: #f06292;
      border: none;
      color: white;
      padding: 8px 12px;
      border-radius: 5px;
      cursor: pointer;
    }
    .add-to-cart:hover {
      background-color: #d81b60;
    }
  </style>
</head>
<body>

<p>OUR PRODUCTS</p>
<div class="category">
  <h2>Lipsticks</h2>
  <div class="product-row">
    <?php
    $query = "select * from products where p_category='lipsticks'";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)){
    ?>
    <div class="product-card">
      <img src="images/<?php echo $row['p_image'] ?>" alt="<?php echo $row['p_name'] ?>">
      <div class="price">$<?php echo $row['p_amount'] ?></div>
     <a href="product-details.php?id=<?php echo $row['p_id'] ?>" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <?php
    }
    ?>
      </div>
</div>

<div class="category">
  <h2>Creams</h2>
  <div class="product-row">
    <div class="product-card">
      <img src="cart5.jpg" alt="Cream 1">
      <div class="price">$18.99</div>
      <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <div class="product-card">
      <img src="cart6.jpg" alt="Cream 2">
      <div class="price">$22.49</div>
     <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <div class="product-card">
      <img src="cart15.jpg" alt="Cream 3">
      <div class="price">$19.99</div>
      <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <div class="product-card">
      <img src="cart16.jpg" alt="Cream 3">
      <div class="price">$16.99</div>
     <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
   <div class="product-card">
      <img src="cart17.jpg" alt="Cream 3">
      <div class="price">$40.99</div>
      <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
  </div>
</div>
<div class="category">
  <h2>Shadows</h2>
  <div class="product-row">
    <?php
    $query = "select * from products where p_category='shadows'";
    $result = mysqli_query($conn,$query);
    while($row = mysqli_fetch_array($result)){
    ?>
    <div class="product-card">
      <img src="images/<?php echo $row['p_image'] ?>" alt="<?php echo $row['p_name'] ?>">
      <div class="price">$<?php echo $row['p_amount'] ?></div>
     <a href="product-details.php?id=<?php echo $row['p_id'] ?>" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <?php
    }
    ?>
      </div>

</div>
<div class="category">
  <h2>HAIRCARE</h2>
  <div class="product-row">
    <div class="product-card">
      <img src="cart19.jpg" alt="Shadow 1">
      <div class="price">$46.99</div>
       <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <div class="product-card">
      <img src="cart20.jpg" alt="Shadow 2">
      <div class="price">$77.99</div>
      <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>
    <div class="product-card">
      <img src="cart21.jpg" alt="Shadow 3">
      <div class="price">$45.49</div>
      <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->


    </div>
  <div class="product-card">
      <img src="cart56.jpg" alt="Cream 3">
      <div class="price">$40.99</div>
      <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->

    </div>
<div class="product-card">
      <img src="cart26.jpg" alt="Cream 3">
      <div class="price">$40.99</div>
     <a href="address.html" class="add-to-cart">Add to Cart</a> <!-- Link to login page -->
    </div>

</body>
</html>
ORDER PAGE:
<!DOCTYPE html>
<html>
<head>
  <title>Stylish Beauty Login</title>
  <style>
    body {
      background-color: #f8c6d0; /* Light pink */
      font-family: Arial, sans-serif;
      padding: 40px;
    }

    h1 {
      text-align: center;
      color: #b85c79;
    }

    .form-container {
      width: 400px;
      margin: 0 auto;
      background-color: #fff0f5;
      padding: 25px;
      border-radius: 15px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    img {
      display: block;
      margin: 0 auto 20px;
      width: 200px;
      height: 200px;
      border-radius: 50%;
      border: 3px solid #b85c79;
    }

    label {
      display: block;
      margin-top: 10px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      margin-top: 20px;
      width: 100%;
      padding: 10px;
      background-color: #b85c79;
      color: white;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #94445f;
    }
  </style>
</head>
<body>

  <h1>STYLISH BEAUTY</h1>

  <div class="form-container">
    <img src="make3.jpg" alt="Beauty Image">
     <a href="sub.html" class="add-to-cart">SUBMIT</a> <!-- Link to login page -->


    <form>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">

      <label for="address">Address:</label>
      <input type="text" id="address" name="address">

      <label for="phone">Phone Number:</label>
      <input type="text" id="phone" name="phone">

      <label for="email">Email:</label>
      <input type="email" id="email" name="email">

      <label for="pincode">Pincode:</label>
      <input type="text" id="pincode" name="pincode">
            <input type="submit" value="SUBMIT">
  <a href="sub.html" class="add-to-cart">SUBMIT</a> <!-- Link to login page -->
    </form>
  </div>
</body>
</html>

LOGOUT:
