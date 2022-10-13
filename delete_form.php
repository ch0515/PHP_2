<?php
    $_b = $_GET['b'];
    echo "아이디 값:".$_b;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
<body>
    <h1>BBS 삭제</h1>
    <form method="post" action = "delete.php">
        <div class="form-floating mb-3 col-sm-3">
        <label for="exampleFormControlInput1" class="form-label"></label>
        비밀번호 입력하세요<input type="password" class="form-control" id="exampleFormControlInput1" name= "password" placeholder="">
      </div>
      <input type="hidden" name="b" value="<?php echo $_b ?> ">
      <button type="submit" class="btn btn-warning">삭제완료</button>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>