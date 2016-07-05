<!--start nav bar-->

<nav class="navbar navbar-inverse custom-nav" role="navigation">
    <!-- start navbar container-->
    <div class="container-fluid">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" data-toggle="collapse" aria-expanded="false" data-target="#navbar">
                <span class="sr-only">Toggle Navigation</span>
                <li class="icon-bar"></li>
                <li class="icon-bar"></li>
                <li class="icon-bar"></li>
                <li class="icon-bar"></li>
            </button>
            
        </div>
        <!-- end navbar header-->

        <div class="navbar-collapse collapse" id="navbar">
            <ul class="nav navbar-nav">
                <li id="home"><a href="../home/"><i class="fa fa-home"></i> Home</a></li>
                <li id="home"><a href="../control-panel/"><i class="glyphicon glyphicon-gear"></i> Control Panel</a></li>
                <li id="pref"><a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button"><i class="fa fa-bars"></i> View As <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        
                        <li id="ind"><a id="indi" href="../individual/">Individual</a></li>
                        <li id="group"><a href="../group/">Group</a></li>
                        
                    </ul>

                </li>
               
            </ul>

            <?php 
                if($_SESSION['option'] === 'ind'){
                    ?>

                <form class="navbar-form navbar-right" role="search" method="POST" name="indForm" action="search.php">
                    
                    <div class="form-group">
                        <select name="group" class="form-control">
                            <option value="gnoob">Select a group</option>
                            <option value="sci">Science</option>
                            <option value="arts">Arts</option>
                            <option value="com">Commerce</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="year" class="form-control">
                            <option value="ynoob">Select a Semester</option>
                            <option value="1st">1st semester</option>
                            <option value="2nd">2nd semester</option>
                            <option value="3rd">3rd semester</option>
                            <option value="4th">4th semester</option>
                        </select>
                    </div>
                    <div class="form-group has-feedback">
                        <input type="number" placeholder="search" role="search" class="form-control" name="roll">
                        <span class="form-control-feedback glyphicon glyphicon-search "></span>
                        <input type="hidden" class="form-control invisible" name="search" value="GO">
                    </div>
                </form>

                    <?php
                }else if($_SESSION['option'] === 'grp'){

                    ?>

                       <form class="navbar-form navbar-right" name="grpform" role="search" method="POST" action="search.php">
                    
                    <div class="form-group">
                        <select name="group" id="grp" class="form-control">
                            <option value="gnoob">Select a group</option>
                            <option value="sci">Science</option>
                            <option value="arts">Arts</option>
                            <option value="commerce">Commerce</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <select name="year"  id="yr" class="form-control">
                            <option value="ynoob">Select a Semister</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                        </select>
                    </div>
                </form>

                    <?php
                }else if($_SESSION['option'] === 'yr'){
                    ?>

                 
                    

                    <?php
                }
            ?>

            
            
           
        </div>
          
    </div>
    <!-- end navbar container-->
</nav>
