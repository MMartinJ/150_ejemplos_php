<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Aviso de Cookies</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.css" />
<style>
/* Estilos básicos para el modal */
#modalCookies {
  display: none;
  position: fixed;
  z-index: 9999;
  left: 0; top: 0;
  width: 100%; height: 100%;
  background: rgba(0,0,0,0.6);
}
#modalCookies .contenido {
  background: #fff;
  max-width: 700px;
  margin: 5% auto;
  padding: 20px;
  border-radius: 8px;
  overflow-y: auto;
  max-height: 80vh;
}
#modalCookies .cerrar {
  float: right;
  cursor: pointer;
  font-weight: bold;
  font-size: 20px;
}
</style>
</head>
<body>

<h1>Mi página</h1>
<p>Contenido visible para todos los usuarios.</p>

<!-- Modal -->
<div id="modalCookies">
  <div class="contenido">
    <span class="cerrar">&times;</span>
    <div id="textoPolitica">Cargando...</div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/cookieconsent@3/build/cookieconsent.min.js" data-cfasync="false"></script>
<script>
window.cookieconsent.initialise({
  palette: {
    popup: { background: "#237afc" },
    button: { background: "#fff", text: "#237afc" }
  },
  theme: "classic",
  type: "opt-in",
  content: {
    message: "Este sitio utiliza cookies para garantizar la mejor experiencia.",
    dismiss: "Entendido",
    allow: "Permitir cookies",
    link: "Más información",
    href: "#" // Evitamos redirección
  },
  onPopupOpen: function() {
    document.querySelector('.cc-link').addEventListener('click', function(e) {
      e.preventDefault();
      // Cargar contenido externo
      fetch('politica.html')
        .then(resp => resp.text())
        .then(html => {
          document.getElementById('textoPolitica').innerHTML = html;
          document.getElementById('modalCookies').style.display = 'block';
        })
        .catch(err => {
          document.getElementById('textoPolitica').innerHTML = "<p>Error al cargar la política.</p>";
          document.getElementById('modalCookies').style.display = 'block';
        });
    });
  }
});

// Cerrar modal
document.querySelector('#modalCookies .cerrar').addEventListener('click', function() {
  document.getElementById('modalCookies').style.display = 'none';
});
</script>

</body>
</html>
