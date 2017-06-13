<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>

<style>
	#table-wrapper {
  	  position:relative;
	}
	#table-scroll {
	  height:150px;
	  overflow:auto;  
	  margin-top:20px;
	}
	#table-wrapper table {
	  width:100%;

	}
	#table-wrapper table * {
	  background:yellow;
	  color:black;
	}
	#table-wrapper table thead th .text {
	  position:absolute;   
	  top:-20px;
	  z-index:2;
	  height:20px;
	  width:35%;
	  border:1px solid red;
	}
</style>
</head>

<body>

<div id="table-wrapper">
  <div id="table-scroll">
    <table>
        <thead>
            <tr>
                <th><span class="text">A</span></th>
                <th><span class="text">B</span></th>
                <th><span class="text">C</span></th>
            </tr>
        </thead>
        <tbody>
          <tr> <td>1, 0</td> <td>2, 0</td> <td>3, 0</td> </tr>
          <tr> <td>1, 1</td> <td>2, 1</td> <td>3, 1</td> </tr>
          <tr> <td>1, 2</td> <td>2, 2</td> <td>3, 2</td> </tr>
          <tr> <td>1, 3</td> <td>2, 3</td> <td>3, 3</td> </tr>
          <tr> <td>1, 4</td> <td>2, 4</td> <td>3, 4</td> </tr>
          <tr> <td>1, 5</td> <td>2, 5</td> <td>3, 5</td> </tr>
          <tr> <td>1, 6</td> <td>2, 6</td> <td>3, 6</td> </tr>
          <tr> <td>1, 7</td> <td>2, 7</td> <td>3, 7</td> </tr>
          <tr> <td>1, 8</td> <td>2, 8</td> <td>3, 8</td> </tr>
          <tr> <td>1, 9</td> <td>2, 9</td> <td>3, 9</td> </tr>
          <tr> <td>1, 10</td> <td>2, 10</td> <td>3, 10</td> </tr>
          <!-- etc... -->
          <tr> <td>1, 99</td> <td>2, 99</td> <td>3, 99</td> </tr>
        </tbody>
    </table>
  </div>
</div>

</body>
</html>