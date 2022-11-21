<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<style>
* {
	 box-sizing: border-box;
}
 body {
	 background: #f1f3f5;
}
.container {
	 box-shadow: 0 6px 8px rgba(102, 119, 136, .03), 0 1px 2px rgba(102, 119, 136, .3);
	 background-color: #fff;
	 width: 500px;
	 height: auto;
	 margin: 40px auto;
	 padding: 20px 30px 20px 30px;
}
.judul {
	 font-weight: 400;
	 margin-bottom: 30px;
}
.button {
	 background-color: #28a745;
	 color: white;
	 font-size: 0.9rem;
	 min-width: auto;
	 padding: 10px 25px 10px 25px;
}
.result {
	 margin: 0;
     font-size: 1rem;
	 min-width: auto;
	 padding: 10px 25px 10px 25px;
}
.hasil{
    background-color: #161616;
	 color: white;
	 font-size: 0.9rem;
	 min-width: auto;
	 padding: 10px 25px 10px 25px;
}
.input-control {
	margin-bottom: 15px;
}

</style>
<body>
        <div class="container">
        <h1 class="judul">Kalkulator Sederhana</h1>
    <form>
    <div class="input-control">
		<label for="num1">
			Number 1: <input type="text" name="no1" placeholder="Masukan nomor pertama" autofocus>
		</label>
	</div>
	<div class="input-control">
		<label for="num1">
			Number 2: <input type="text" name="no2" placeholder="Masukan nomor kedua">
		</label>
	</div>
 <select name="operator">
             <option>None</option>
            <option>tambah +</option>
            <option>kali x</option>
            <option>kurang -</option>
            <option>bagi /</option>
            <option>sisa bagi %</option>
        </select>
        <br><br>
        <button class="button" name="submit">RUN!</button>
        </form>
        <p class="result">Result: </p>
        <div class="hasil">
        <?php
            if(isset($_GET['submit'])){
                $result1 = $_GET['no1'];
                $result2 = $_GET['no2'];
                $operator = $_GET['operator'];
                switch($operator){
                    case "None":
                        echo "KAMU BELUM MEMILIH METHOD!";
                        break;
                    case "tambah +":
                        echo $result1 + $result2;
                        break;
                    case "kali x":
                        echo $result1 * $result2;
                        break;
                    case "kurang -":
                        echo $result1 - $result2;
                        break;
                    case "bagi /":
                        echo $result1 / $result2;
                        break;
                    case "sisa bagi %":
                        echo $result1 % $result2;
                        break;
                }
            }
        ?>
        </div>
        </div>
</body>
</html>
