<style>
.alert{
    /* background-color:red; */
    color:red;
    font-size:20px;
    font-family: 'Barlow', sans-serif;
}
</style>


<!-- No username -->
<?php if(isset($_SESSION['no-username'])):?>
    <center>
        <div class="alert alert-danger">
            <audio  autoplay>     
                <source src="../../assets/sound/error1.mp3" type="audio/mpeg" >
            </audio>
             <?= $_SESSION['no-username'] ?>!
             <?php unset($_SESSION['no-username']); ?>
             
        </div> 
     </center>
<?php endif; ?>  


<!-- NO password -->
<?php if(isset($_SESSION['no-password'])):?>
    <center>
        <div class="alert alert-danger">
        <audio  autoplay>     
                <source src="../../assets/sound/error1.mp3" type="audio/mpeg" >
            </audio>
             <?= $_SESSION['no-password'] ?>!
             <?php unset($_SESSION['no-password']); ?>
        </div> 
     </center>
<?php endif; ?>  

<!-- no firstname -->
<?php if(isset($_SESSION['no-firstname'])):?>
    <center>
        <div class="alert alert-danger">
        <audio  autoplay>     
                <source src="../../assets/sound/error1.mp3" type="audio/mpeg" >
            </audio>
            <?= $_SESSION['no-firstname'] ?>!
             <?php unset($_SESSION['no-firstname']); ?>
        </div> 
     </center>
<?php endif; ?>  

<!-- no lastname -->
<?php if(isset($_SESSION['no-lastname'])):?>
    <center>
        <div class="alert alert-danger">
        <audio  autoplay>     
                <source src="../../assets/sound/error1.mp3" type="audio/mpeg" >
            </audio>
             <?= $_SESSION['no-lastname'] ?>!
             <?php unset($_SESSION['no-lastname']); ?>
        </div> 
     </center>
<?php endif; ?>  

<!-- no gender -->
<?php if(isset($_SESSION['no-gender'])):?>
    <center>
        <div class="alert alert-danger">
        <audio  autoplay>     
                <source src="../../assets/sound/error1.mp3" type="audio/mpeg" >
            </audio>
           <?= $_SESSION['no-gender'] ?>!
             <?php unset($_SESSION['no-gender']); ?>
        </div> 
     </center>
<?php endif; ?>  