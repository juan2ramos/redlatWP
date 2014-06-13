<?php
/*
Template Name: contacto
*/
?>
<?php
$band = true;
$message = '';
if (!empty($_POST)) {

    if (empty($_POST['name']) || empty($_POST['institution']) || empty($_POST['email']) || empty($_POST['phone']) || ($_POST['message'])) {
        $success = FALSE;
        $message = 'Todos los campos son requeridos!!';

    } else {

        require '/home/redlat/public_html/via/include/PHPMailer/PHPMailerAutoload.php';

        $mail = new PHPMailer;
        $mail->IsSendmail();
        $mail->FromName = 'Formulario de contacto Sitio redlat.org';
        $mail->CharSet = 'UTF-8';
        $mail->From = 'juan2ramos@redlat.org';
        $mail->Subject = $_POST['message'];
        $mail->MsgHTML('Mensaje con HTML');
        $template = '<h1>Mensaje enviado desde el formulario de redlat.org</h1><br><br>';
        $template .= 'Nombre: ' . $_POST['name'] . '<br>';
        $template .= 'Email: ' . $_POST['email'] . '<br>';
        $template .= 'Mensaje: <br>' . $_POST['message'];
        $mail->Body = $template;
        $mail->AddAddress('juan2ramos@redlat.org', '');
        $mail->Send();
        $band = false;
        $message = 'Felicitaciones, su mensaje a sido enviado con éxito!!';
    }
}
get_header();
?>

<section class="banner-contact">
    <div class="head-contact">
        <span>...</span>

        <h2>Contacto</h2>
    </div>
</section>
<section id="contact">
    <p><?php echo $message ?></p>
    <?php if ($band): ?>
        <form action="/contacto" method="post">
            <div>
                <label for="name">Nombre:</label>
                <input type="text" name="name">
            </div>
            <div>
                <label for="institution">Institución:</label>
                <input type="text" name="institution">
            </div>
            <div>
                <label for="email">E-mail:</label>
                <input type="email" name="email">
            </div>
            <div>
                <label for="phone">Teléfono:</label>
                <input type="tel" name="phone">
            </div>
            <div>
                <label for="city">Ciudad:</label>
                <input type="text" name="city">
            </div>
            <label for="message">Mensaje:</label>
            <textarea name="message"></textarea>
            <span><input type="submit" value="...enviar"></span>
        </form>
        <div class="contact-info">
            <h3>O puedes escribirle a...</h3>
            <div>
                Información General REDLAT<br>
                <a href="mailto:info@redlat.org">info@redlat.org</a><br>
            </div>
            <div>
                Información General CIRCULART<br>
                <a href="mailto:info@circulart.org">info@circulart.org</a><br>
            </div>
            <div>

                Secretaria Ejecutiva-Tesorera<br>
                Beatriz Elena García<br>
                <a href="mailto:bettygarcia@redlat.org">bettygarcia@redlat.org</a><br>
            </div>
            <div>
                Producción General REDLAT<br>
                Julián Arbeláez<br>
                <a href="mailto:julian.arbelaez@redlat.org">julian.arbelaez@redlat.org</a><br>
            </div>
            <div>
                Producción General CIRCULART<br>
                Paula Posada<br>
                <a href="mailto:paulaposada@circulart.org">paulaposada@circulart.org</a><br>
            </div>
            <div>
                Coordinación Profesionales Ruedas de Negocios<br>
                Luis Fernando Zuluaga<br>
                <a href="mailto:luisfer@circulart.org">luisfer@circulart.org</a><br>
            </div>
            <div>
                Coordinación Artistas Ruedas de Negocios<br>
                Milena García<br>
                <a href="mailto:milenagarcia@circulart.org">milenagarcia@circulart.org</a><br>
            </div>
            <div>
                Editora web y redes sociales<br>
                Jenny Giraldo<br>
                <a href="mailto:jennygiraldo@redlat.org">jennygiraldo@redlat.org</a><br>
            </div>
        </div>
    <?php endif ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
