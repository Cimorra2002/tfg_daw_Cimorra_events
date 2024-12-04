// Función para obtener sugerencias del servidor
function fetchSuggestions() {
    const query = document.getElementById('searchInput').value; // Obtener el término de búsqueda
    const suggestionsList = document.getElementById('suggestionsList'); // Lista de sugerencias

    if (query.length > 0) { // Solo si el término tiene 1 caracter
        fetch(`/home?query=${query}`)
            .then(response => response.json())
            .then(data => {
                suggestionsList.innerHTML = ''; // Limpiar las sugerencias previas
                if (data.length > 0) {
                    suggestionsList.style.display = 'block'; // Mostrar las sugerencias
                    data.forEach(event => {
                        const li = document.createElement('li');
                        li.classList.add('list-group-item');
                        li.textContent = event.evento_nombre; // Mostrar el nombre del evento
                        li.onclick = () => {
                            // Redirigir al evento seleccionado
                            window.location.href = `/events/${event.localiz_id}/${event.evento_id}`;
                        };
                        suggestionsList.appendChild(li);
                    });
                } else {
                    suggestionsList.style.display = 'none'; // Ocultar las sugerencias si no hay resultados
                }
            })
            .catch(error => console.error('Error al obtener sugerencias:', error));
    } else {
        suggestionsList.style.display = 'none'; // Ocultar si el input tiene menos de 1 caracteres
    }
}