<?php
session_start();
$number1=rand(0,10);
$number2=rand(0,10);
$result=$number1+$number2;
if($result===0){$validate='zero';}
if($result===1){$validate='un';}
if($result===2){$validate='deux';}
if($result===3){$validate='trois';}
if($result===4){$validate='quatre';}
if($result===5){$validate='cinq';}
if($result===6){$validate='six';}
if($result===7){$validate='sept';}
if($result===8){$validate='huit';}
if($result===9){$validate='neuf';}
if($result===10){$validate='dix';}
if($result===11){$validate='onze';}
if($result===12){$validate='douze';}
if($result===13){$validate='treize';}
if($result===14){$validate='quatorze';}
if($result===15){$validate='quinze';}
if($result===16){$validate='seize';}
if($result===17){$validate='dix-sept';}
if($result===18){$validate='dix-huit';}
if($result===19){$validate='dix-neuf';}
if($result===20){$validate='vingt';}
$_SESSION['validate']=md5($validate);
$response=@$_SESSION['response'];
include 'template/header.php';
?>
            <main>
                <section>
                    <h2>Me contacter par t&eacute;l&eacute;phone</h2>
                    <p><a href="tel:+3366419734">06 66 41 97 34</a></p>
                    <h2>Me contacter par sms</h2>
                    <p><a href="sms:+3366419734">06 66 41 97 34</a></p>
                    <h2>Me contacter par what's up</h2>
                    <p><a href='https://api.whatsapp.com/send?phone=330666419734&text=Bonjour'>What's up</a></p>
                    <h2>Me contacter par voie postale</h2>
                    <address>1 avenue Jean Vigo<br>44300 Nantes</address>
                </section>
            </main>
            <div class='response'><?php echo $response; ?></div>
            <form action='traitement/contact-processing.html' method='post'>
                <label>
                    <input type='text' name='name' placeholder='Nom Pr&eacute;nom' required>
                </label>
                <label>
                    <input type='email' name='email' placeholder='votreadresse@mail.com' required>
                </label>
                <label>
                    <input type='tel' name='tel' placeholder='+33123456789'>
                </label>
                <label>
                    <input type='text' name='subject' placeholder='Objet du message' required>
                </label>
                <label>
                    <textarea name='message' placeholder='Entrez votre message' required></textarea>
                </label>
                <label>Combien font <?php echo $number1.'+'.$number2; ?> le resultat en lettre.<br>
                    <input type='text' name='boat' placeholder='Entrez la r&eacute;ponse' required>
                </label>
                <label>
                    <input type='hidden' name='boat1' placeholder='Entrez une nouvelle fois la r&eacute;ponse'>
                </label>
                <label class='adjust'>
                    Recevoir le mail :
                    <input type='checkbox' name='receive-mail'>
                </label>
                <button type='submit'>Envoyez le message</button>
            </form> 
<?php
include 'template/footer.php';
$_SESSION['response']='';
?>