<?php include("form_process.php") ?>


<section class="container pos">
    <label>
        <h2 id="reg"><br>Event Registration: Get Your Ticket!</h2>
    </label>


    <!-- if-else form structure -->
    <?php if($message_body != ''){
        echo "<div><h2>" . $message_body  . "</h2></div>";
    }else{?>
        <form method="post" action="site.php" autocomplete="on" name="myForm" novalidate target="reg">

            <p>
                <label>Full name: <br>
                    <input placeholder="Your name" name="name" type="text" size="23" maxlength="30" value="<?=$name?>"/>
                    <span><?=$name_error?></span>
                </label>
            </p>

            <p>
                <label>Phone:<br>
                    <input type="tel" name="phone1" placeholder="###" size="5" maxlength="10" value="<?=$phone1?>" > -
                    <input type="tel" name="phone2" placeholder="###" size="5" maxlength="10" value="<?=$phone2?>" > -
                    <input type="tel" name="phone3" placeholder="####" size="6" maxlength="10" value="<?=$phone3?>" >
                    <span><?=$phone_error?></span>
                </label>
            </p>

            <p>
                <label>Email:<br>
                    <input type="email" name="email" placeholder="name@domain.com" size="23" maxlength="30" value="<?=$email?>"/>
                    <span><?=$email_error?></span>
                </label>
            </p>


            <p>
                <label>Number of guests: <br>
                    <input type="number"
                           name="guests"
                           min="0"
                           max="9"
                           step="1"
                           placeholder="0"
                           value="<?=$guests?>" > <span><?=$guests_error?></span>
                </label>
            </p>


            <p>
                <label for="arrival">Arrival method: <br>
                    <input type="text" name="arrival1" id="arrival" size="23" maxlength="30"
                           placeholder="Choose method" list="method">
                    <datalist id="method">
                        <option value="Independently">
                        <option value="Shuttle">
                    </datalist>
                </label>
            </p>

            <p>
                <label>Additional Comments: <br>

                    <textarea placeholder="Write your comment here..." rows="3" cols="30" name="comments"  value="<?=$comments?>" ></textarea><br>
                    <span><?=$comments_error?></span>
                </label>
            </p>

            <p>
                <input class="button button2 rounded" type="submit" value="Submit">
                <input class="button button2 rounded" type="reset" value="Clean">
            </p>

        </form>
    <?php }?>
</section>