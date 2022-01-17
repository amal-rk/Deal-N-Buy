<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add New Car | Deal 'N' Buy</title>
  <link rel="stylesheet" href="{{ url('product-form-2-assets/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Add Car</h3>
    {{-- <h4>Contact us for custom quote</h4> --}}
    <fieldset>
      <input placeholder="Car Name" type="text" tabindex="1" required autofocus>
      <select name="cars" id="cars">
        <option value="Renault">Renault</option>
        <option value="Peugeot">Peugeot</option>
        <option value="Citroën">Citroën</option>
        <option value="Volkswagen">Volkswagen</option>
        <option value="Dacia">Dacia</option>
        <option value="Toyota">Toyota</option>
        <option value="Ford">Ford</option>
        <option value="Nissan">Nissan</option>
        <option value="Fiat">Fiat</option>
        <option value="Mercedes">Mercedes</option>
        <option value="Audi">Audi</option>
        <option value="Opel">Opel</option>
        <option value="KIA">KIA</option>
        <option value="Hyundai">Hyundai</option>
        <option value="Skoda">Skoda</option>
        <option value="Mini">Mini</option>
        <option value="Seat">Seat</option>
        <option value="DS">DS</option>
      </select>
    </fieldset>
    <fieldset>
      <input placeholder="Car Model" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
      <input placeholder="Distance Driven" type="number" tabindex="2" min="0" required>
    </fieldset>
    <fieldset>
        <input placeholder="Owner" type="number" tabindex="3" min="0" required>
    </fieldset>
    <fieldset>
        <div style="color: #aaa">Release Date</div>
        <input placeholder="Year" type="date" tabindex="4" min="1960" required>
    </fieldset>
    <fieldset>
      <input placeholder="Transmission" type="text" tabindex="5" required>
    </fieldset>
    <fieldset>
        <input placeholder="Displacement" type="number" tabindex="6" required>
    </fieldset>
    <fieldset>
        <input placeholder="Color" type="text" tabindex="7" required>
    </fieldset>
    <fieldset>
        <input placeholder="Registered State" type="text" tabindex="8" required>
    </fieldset>
    <fieldset>
        <input placeholder="Location" type="text" tabindex="9" required>
    </fieldset>
    <fieldset>
        <div style="color: #aaa">Photos</div>
        <input type="file" tabindex="10" required>
    </fieldset>
    <fieldset>
      <textarea placeholder="Description...." tabindex="11" required></textarea>
    </fieldset>
    <fieldset>
      <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
    </fieldset>
    {{-- <p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p> --}}
  </form>
</div>
<!-- partial -->
  
</body>
</html>
