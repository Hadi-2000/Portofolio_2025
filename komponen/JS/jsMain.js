
document.addEventListener("DOMContentLoaded", function () {
  const search = document.querySelector("input[type='search']");
  const filterSelect =document.getElementById("filterProject");
  const cards = document.querySelectorAll(".col");

  function filterProjects(){
    const searchText = search.value.toLowerCase();
    const selectedCategory = filterSelect.options[filterSelect.selectedIndex].text.toLowerCase();

      cards.forEach(card => {
        const title = card.querySelector(".card-title").textContent.toLowerCase();
        const category = card.querySelector(".card-text").textContent.toLocaleLowerCase();

        //cek apakah search sesuai text dan kategori
        const matchesSearch = title.includes(searchText);
        const matchesCategory = selectedCategory === "pilih kategori" || category.includes(selectedCategory);
        
        if(matchesCategory && matchesSearch){
          card.computedStyleMap.display = "block";
        }else {
          card.computedStyleMap.display = "none";
        }
    });
  }
  //input
  search.addEventListener("input", filterProjects);

  //dropdown
  filterSelect.addEventListener("change", filterProjects);
});