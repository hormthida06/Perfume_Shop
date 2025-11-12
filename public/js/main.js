function renderProducts(products) {
  const container = document.getElementById("product-list");
  container.innerHTML = products
    .map(
      (p) => `
      <div class="col-md-4 mb-4">
        <div class="card product-card h-100">
          <img src="${p.img}" class="card-img-top" alt="${p.name}">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">${p.name}</h5>
            <p class="card-text text-primary fw-bold">$${p.price.toFixed(2)}</p>
            <div class="mt-auto d-flex justify-content-between gap-5">
              <a href="/detail?id=${p.id}" class="btn btn-outline-primary">View</a>
              <button class="btn btn-primary add-to-cart-btn" data-id="${p.id}">
                Add to Cart
              </button>
            </div>
          </div>
        </div>
      </div>
    `
    )
    .join("");

  document.querySelectorAll(".add-to-cart-btn").forEach((btn) => {
    btn.addEventListener("click", (e) => {
      const id = parseInt(e.target.dataset.id);
      const product = products.find((p) => p.id === id);
      addToCart(product);
    });
  });
}


function renderDetail(product) {
  const container = document.getElementById("product-detail");
  container.innerHTML = `
    <div class="row">
      <!-- Product Image -->
      <div class="col-md-6">
        <img src="${product.img}" class="img-fluid rounded" alt="${product.name}">
      </div>

      <!-- Product Info -->
      <div class="col-md-6">
        <h2>Product Name</h2>
        <h2>${product.name}</h2>
        <p>Men's Shoes with Reflective Accents</p>
        <p><strong>Price:</strong> $${product.price.toFixed(2)}</p>
        <p><strong>Description:</strong> ${product.desc}</p>
        <p><strong>Rating:</strong> ★★★★☆ (4.5/5)</p>

        <!-- Additional Info -->
        <div class="col-md-5 mt-3">
          <p class="text-success">Engrave me For $6.99</p>
          <p>200ML</p>
        </div>

        <!-- Buttons -->
        <button class="btn btn-primary btn-lg" id="add-to-cart-btn">Add to Cart</button>
        <a href="/" class="btn btn-secondary btn-lg ms-2">Back</a>
      </div>
    </div>
  `;

  // Add event listener for Add to Cart
  document.getElementById("add-to-cart-btn").addEventListener("click", () => {
    addToCart(product);
  });
}


function renderCart() {
  const container = document.getElementById("cart-items");
  if (cart.length === 0) {
    container.innerHTML = "<p>Your cart is empty.</p>";
    document.getElementById("cart-total").textContent = "0.00";
    return;
  }

  container.innerHTML = `
    <table class="table">
      <thead><tr><th>Product</th><th>Price</th><th>Qty</th><th>Total</th><th></th></tr></thead>
      <tbody>
        ${cart.map(item => `
          <tr>
            <td>${item.name}</td>
            <td>$${item.price}</td>
            <td><input type="number" class="form-control w-50" value="${item.quantity}" 
                     onchange="updateQuantity(${item.id}, this.value)"></td>
            <td>$${(item.price * item.quantity).toFixed(2)}</td>
            <td><button class="btn btn-danger btn-sm" onclick="removeFromCart(${item.id})">Remove</button></td>
          </tr>
        `).join("")}
      </tbody>
    </table>
  `;
  document.getElementById("cart-total").textContent = getCartTotal();
}

function renderOrderSummary() {
  const container = document.getElementById("order-summary");
  container.innerHTML = cart.map(item => `
    <p>${item.name} x${item.quantity} = $${(item.price * item.quantity).toFixed(2)}</p>
  `).join("");
  document.getElementById("order-total").textContent = getCartTotal();
}