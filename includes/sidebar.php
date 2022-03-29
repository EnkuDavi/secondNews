  <div class="col-md-4">

          <!-- Search Widget -->
          <!-- <div class="card mb-4">
            <h5 class="card-header">Search</h5>
            <div class="card-body">
                   <form name="search" action="search.php" method="post">
              <div class="input-group">
           
        <input type="text" name="searchtitle" class="form-control" placeholder="Search for..." required>
                <span class="input-group-btn">
                  <button class="btn btn-secondary" type="submit">Go!</button>
                </span>
              </form>
              </div>
            </div>
          </div> -->

          <!-- Categories Widget -->
          <!-- Side Widget -->
          <h5>Recent News</h5>
          <?php if(isset($_GET['catid'])) :?>
            <div class="card mb-3" style="max-width: 540px;">
              <?php 
                $id = htmlspecialchars($_GET['catid']);
                include('includes/config.php');
                $sql = "SELECT * FROM tblposts WHERE CategoryId = '$id'";
                $result = mysqli_query($con, $sql);
                while($row = mysqli_fetch_assoc($result)) {
                  $date = $row["PostingDate"];
              ;?>
              <div class="row no-gutters">
                <div class="col-md-4">
                  <img src="admin/postimages/<?= $row["PostImage"];?>" class="" style="width: 100px;margin-top:20%;" alt="...">
                </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"><?php echo $row["PostTitle"] ;?></h5>
                    <p class="card-text"><small class="text-muted">Last updated <?= date("d F Y", strtotime($date));?></small></p>
                  </div>
                </div>
              </div>
              <?php } ;?>
            </div>
          <?php else :?>
             <!-- Categories Widget -->
             <div class="card my-4">
            <h5 class="card-header">Categories</h5>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">
                  <ul class="list-unstyled mb-0">
                    <?php $query=mysqli_query($con,"select id,CategoryName from tblcategory");
                    while($row=mysqli_fetch_array($query))
                    {
                    ?>
                    <li>
                      <a href="category.php?catid=<?php echo htmlentities($row['id'])?>"><?php echo htmlentities($row['CategoryName']);?></a>
                    </li>
                    <?php } ?>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <?php endif ;?>
        </div>
