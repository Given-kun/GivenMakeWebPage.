<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRINCESS DELA CRUZ's CAKE ORDERING</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><span>Cake</span>Ordering System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
    </div>
  </div>
</nav>

 <span class="input-group-text" id="basic-addon1">YOUR ORDER:</span>

 <table class="table table-dark table-striped">
  <tr>

    <td>
      Name:
    </td>
    <td><?php

 echo $_POST['name'];

    
?></td>
</tr>
<tr>
 <td>
      Address:
    </td>
    <td><?php

 echo $_POST['address'];

    
?></td>
</tr>
<tr>
<td>
      Contact Number:
    </td>
    <td><?php

 echo $_POST['contact'];

    
?></td>
</tr>
<tr>
<td>
      Event:
    </td>
    <td><?php

 echo $_POST['event'];

    
?></td>
</tr>
<tr>
<td>
      Celebrant:
    </td>
    <td><?php

 echo $_POST['Celebrant'];

    
?></td>
</tr>
<tr>

<td>
      Theme:
    </td>
    <td><?php

 echo $_POST['address'];

    
?></td>
</tr>
<tr>
<td>
      Cake Size:
    </td>
    <td><?php

 echo $_POST['Csize'];

    
?></td>
</tr>
<tr>
<td>
      Mode of payment:
    </td>
    <td><?php

 echo $_POST['pay'];

    
?></td>
</tr>
<tr>
<td>
      Mode of payment:
    </td>
    <td><?php

 echo $_POST['Mode'];

    
?></td></tr>
<tr>
<td>
    CAKE FLAVORS:
    </td>
    <td><?php

 echo $_POST['flavor'];

    
?></td></tr>
<tr>
<td>
    CHIFFON:
    </td>
    <td><?php

 echo $_POST['chiffon'];

    
?></td>


  </tr>
</table>