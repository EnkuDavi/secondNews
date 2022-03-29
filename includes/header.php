 <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
      <a class="navbar-brand" href="index.php"><img src="images/logo_sn.png" height="80px"></a>
        
      <form class="form-inline my-2 my-lg-0" name="search" action="search.php" method="post">
      <div class="input-group">
        <input type="text" name="searchtitle" class="form-control" placeholder="Mencari ..." required>
          <span class="input-group-btn">
            <button class="btn btn-secondary" type="submit">Cari</button>
          </span>
      </form>
      </div>
  </div>
</nav>

<nav class="navFirst navbar navbar-expand-lg navbar-dark bg-dark mt-5 mx-auto">
  <div class="container">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
            while($row=mysqli_fetch_array($query)){;?>
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
              </li>
          <?php } ;?>
          </li> 
        </ul>
      </div>
      </div>
    </div>
  </div>
</nav>
