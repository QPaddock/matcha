var upload1 = document.getElementById('inputGroupFile01');
var upload2 = document.getElementById('inputGroupFile02');
var upload3 = document.getElementById('inputGroupFile03');
var upload4 = document.getElementById('inputGroupFile04');
var upload5 = document.getElementById('inputGroupFile05');

upload1.onchange = function() 
{
    var reader = new FileReader();
    reader.onload = function ()
    {
        var output = document.getElementById('image1');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}


upload2.onchange = function() 
{
    var reader = new FileReader();
    reader.onload = function ()
    {
        var output = document.getElementById('image2');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}


upload3.onchange = function() 
{
    var reader = new FileReader();
    reader.onload = function ()
    {
        var output = document.getElementById('image3');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
}


upload4.onchange = function() 
{
    var reader = new FileReader();
    reader.onload = function ()
    {
        var output = document.getElementById('image4');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};

upload5.onchange = function() 
{
    var reader = new FileReader();
    reader.onload = function ()
    {
        var output = document.getElementById('image5');
        output.src = reader.result;
    }
    reader.readAsDataURL(event.target.files[0]);
};