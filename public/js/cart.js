let cart = JSON.parse(localStorage.getItem("cart")) || [];

function addToCart(product) {
  const existing = cart.find(item => item.id === product.id);
  if (existing) {
    existing.quantity += 1;
  } else {
    cart.push({ ...product, quantity: 1 });
  }
  localStorage.setItem("cart", JSON.stringify(cart));
  updateCartCount();
}

function removeFromCart(id) {
  cart = cart.filter(item => item.id !== id);
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
  updateCartCount();
}

function updateQuantity(id, qty) {
  if (qty <= 0) return removeFromCart(id);
  const item = cart.find(i => i.id === id);
  if (item) item.quantity = qty;
  localStorage.setItem("cart", JSON.stringify(cart));
  renderCart();
}

function updateCartCount() {
  const count = cart.reduce((sum, item) => sum + item.quantity, 0);
  document.querySelectorAll("#cart-count").forEach(el => el.textContent = count);
}

function getCartTotal() {
  return cart.reduce((sum, item) => sum + item.price * item.quantity, 0).toFixed(2);
}