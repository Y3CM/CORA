if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('/CORA/JS/sw.js')
      .then(registration => {
        console.log('Service Worker registrado con éxito:', registration);
      })
      .catch(error => {
        console.log('Error al registrar el Service Worker:', error);
      });
  }
  