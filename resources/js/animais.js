const breedsBySpecies = {
    cachorro: ['Labrador Retriever', 'Poodle', 'Bulldog', 'Beagle', 'Pastor Alemão', 'Golden Retriever'],
    gato: ['Siamês', 'Persa', 'Maine Coon', 'Sphynx', 'Ragdoll'],
    coelho: ['Anão', 'Holandês', 'Rex', 'Lionhead'],
    hamster: ['Sírio', 'Anão Russo', 'Robo', 'Chinês'],
    'porquinho-da-india': ['Abissínio', 'Peruano', 'Silkie', 'Coronet'],
    passaro: ['Calopsita', 'Periquito', 'Canário', 'Agapornis', 'Papagaio'],
    peixe: ['Betta', 'Goldfish', 'Neon', 'Guppy', 'Disco'],
    furao: ['Padrão', 'Albino', 'Canela'],
    tartaruga: ['Tigre-d\'Água', 'Jabuti Piranga', 'Jabuti Tinga'],
    cobra: ['Corn Snake', 'Píton', 'Jiboia'],
    lagarto: ['Gecko', 'Iguana', 'Teiú'],
    arara: ['Arara Azul', 'Arara Vermelha', 'Arara Canindé'],
    cavalo: ['Mangalarga Marchador', 'Quarto de Milha', 'Criollo'],
    vaca: ['Holandesa', 'Gir', 'Nelore'],
    ovelha: ['Suffolk', 'Dorper', 'Santa Inês'],
    cabra: ['Boer', 'Alpina', 'Saanen'],
    porco: ['Large White', 'Duroc', 'Pietrain']
};

const speciesSelect = document.getElementById('animal-type');
const breedSelect = document.getElementById('breed');

function normalizeValue(str) {
    return str.normalize("NFD")
              .replace(/[\u0300-\u036f]/g, "")
              .toLowerCase()
              .replace(/\s+/g, '-');
}

speciesSelect.addEventListener('change', function () {
    const selectedSpecies = normalizeValue(this.value); // 🔧 corrigido aqui
    breedSelect.innerHTML = '<option value="">Selecione a raça</option>';

    if (selectedSpecies && breedsBySpecies[selectedSpecies]) {
        breedsBySpecies[selectedSpecies].forEach(breed => {
            const option = document.createElement('option');
            option.value = normalizeValue(breed);
            option.textContent = breed;
            breedSelect.appendChild(option);
        });
    }
});
