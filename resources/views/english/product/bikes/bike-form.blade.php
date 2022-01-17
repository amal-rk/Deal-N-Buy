<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Add New Bike | Deal 'N' Buy</title>
  <link rel="stylesheet" href="{{ url('product-form-2-assets/style.css') }}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">  
  <form id="contact" action="" method="post">
    <h3>Add Bike</h3>
    {{-- <h4>Contact us for custom quote</h4> --}}
    <fieldset>
      <input placeholder="Bike Name" type="text" tabindex="1" required autofocus>
      <select name="cars" id="cars">
        <option value="Yamaha">Yamaha</option>
        <option value="Honda">Honda</option>
        <option value="B.M.W">B.M.W</option>
        <option value="Kawasaki">Kawasaki</option>
        <option value="Harley Davidson">Harley Davidson</option>
        <option value="Truimph">Truimph</option>
        <option value="K.T.M">K.T.M</option>
        <option value="Suzuki">Suzuki</option>
        <option value="Piaggio">Piaggio</option>
        <option value="Ducatti">Ducatti</option>
        <option value="Enfield">Enfield</option>
        <option value="Kymco">Kymco</option>
        <option value="Mash">Mash</option>
        <option value="Sym">Sym</option>
        <option value="Peugeot">Peugeot</option>
        <option value="Husqvarna">Husqvarna</option>
        <option value="Orcal">Orcal</option>
        <option value="Indian">Indian</option>
        <option value="Aprilia">Aprilia</option>
        <option value="Guzzi">Guzzi</option>
      </select>
    </fieldset>
    <fieldset>
      <input placeholder="Bike Model" type="text" tabindex="1" required autofocus>
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
