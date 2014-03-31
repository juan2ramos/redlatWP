<?php
/*
Template Name: contacto
*/
?>
<?php get_header(); ?>

<section class="banner-contact" >
    <div class="head-contact">
        <span>...</span>
        <h2>Contacto</h2>
    </div>
</section>
<section id="contact">
    <form>
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
        <textarea name="message"></textarea >
        <span><input type="submit" value="...enviar"></span>
    </form>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
