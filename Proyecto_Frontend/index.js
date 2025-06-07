const API_URL = "https://fakestoreapi.com/products";
const productList = document.getElementById("product-list");
const searchInput = document.getElementById("searchInput");

let products = [];

async function fetchProducts() {
  try {
    const res = await fetch(API_URL);
    const data = await res.json();
    products = data;
    displayProducts(products);
  } catch (error) {
    productList.innerHTML = "<p>Error al cargar los productos.</p>";
    console.error("Error:", error);
  }
}

function displayProducts(productArray) {
  productList.innerHTML = "";

  if (productArray.length === 0) {
    productList.innerHTML = "<p>No se encontraron productos.</p>";
    return;
  }

  productArray.forEach((product) => {
    const card = document.createElement("div");
    card.className = "product-card";

    card.innerHTML = `
      <img src="${product.image}" alt="${product.title}" />
      <div class="product-title">${product.title}</div>
      <div class="product-price">$${product.price}</div>
      <div class="product-category">${product.category}</div>
    `;

    productList.appendChild(card);
  });
}

searchInput.addEventListener("input", () => {
  const query = searchInput.value.toLowerCase().trim();
  const filtered = products.filter((p) =>
    p.category.toLowerCase().includes(query)
  );
  displayProducts(filtered);
});

fetchProducts();
