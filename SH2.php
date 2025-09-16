<!DOCTYPE html>
<html lang="es">
<head>
    <title>Mi blog personal</title>
    <link rel="icon" type="image/x-icon" href="https://p7.hiclipart.com/preview/275/1018/486/ico-icon-ghost.jpg">
</head>
<body>
    <?php echo '<p>Bienvenido a mi blog</p>'; ?>
    
    <img src="https://scontent.fntr1-2.fna.fbcdn.net/v/t39.30808-6/480556822_1823213888440370_3233913407986851159_n.jpg?stp=dst-jpg_s206x206_tt6&_nc_cat=106&ccb=1-7&_nc_sid=fe5ecc&_nc_eui2=AeF-_qicpp1FxQ_xx6PFUN62AV8RKKDG-Y8BXxEooMb5j22GazKYEh-noaO14tMRyAoeV2CasMTEBSTPG_DIhcOm&_nc_ohc=wgURheIZPGIQ7kNvwELLE3P&_nc_oc=AdmAlk1ncY84YNZs_ecboOiAs4_pBjvnX6a_zmYEM-Oo5ADE9lVDc_WIZ5NNCU8NGH3WstAyGCr9N06-sWIbZNnM&_nc_zt=23&_nc_ht=scontent.fntr1-2.fna&_nc_gid=25TODuGY385FDUdecCGHag&oh=00_AfbD6M0YUmNBpeVJdcm3R43OxLIR5eAkZKU9j5QrReBx7Q&oe=68CE814C" alt="Imagen de ejemplo">
    <p>Este soy yo.</p>
    
    <p>Lista de mis hobbies:</p>
    <ul>
        <li>Videojuegos</li>
        <li>Programación</li>
        <li>Filosofía</li>
    </ul>
    
    <p>Aquí están mis redes sociales:</p>
    <ul>
        <li><a href="https://www.facebook.com/DanteRodriguez">Facebook</a></li>
    </ul>
    <h2>Quien soy yo y que hago?:</h2>
    <p>Soy un estudiante de ingeniería en sistemas computacionales, me gusta programar y aprender todo lo que puedo sobre tecnología. En mi tiempo libre, disfruto jugar videojuegos y explorar nuevas ideas en filosofía.</p>
    <p>Mi objetivo es convertirme en un desarrollador de software exitoso y contribuir a proyectos innovadores que puedan mejorar la vida de las personas.</p>
    <p>Tengo 19 años y creo que puedo a llegar a ser un gran profesional en el futuro.</p>
    <p>Estoy emocionado por lo que el futuro me depara y estoy comprometido a trabajar duro para alcanzar mis metas.</p>
    <p>Gracias por visitar mi blog y espero que disfruten leyendo sobre mis intereses y experiencias.</p>
    <h3>Mira este increíble video</h3>
    <iframe 
        width="560" 
        height="315" 
        src="https://www.youtube.com/embed/dQw4w9WgXcQ" 
        title="Video de YouTube" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>

    <hr>
    
    <h3>Deja un comentario</h3>
    <form action="Comentarios.php" method="post">
        <label for="nombre">Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="correo">Correo Electrónico:</label><br>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <label for="mensaje">Mensaje:</label><br>
        <textarea id="mensaje" name="mensaje" rows="4" cols="50" required></textarea><br><br>
        
        <input type="submit" value="Enviar Comentario">
    </form>
    
    <hr>
    
    <footer>
        <?php echo '<p>Creado por: Dante Kaleb Rodriguez Flores</p>'; ?>
        <p>Contacto: danterodzflores@gmail.com</p>
    </footer>
</body>
</html>