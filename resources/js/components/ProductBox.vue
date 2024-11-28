<template>
  <div class="product-box">
    <div class="discount">50% off</div>
    <img :src="product.image" alt="Sushi" class="product-image" />
    <h3>
      {{ product.name }} <span>({{ product.japaneseName }})</span>
    </h3>
    <p class="description">{{ product.description }}</p>
    <div class="price-section">
      <span class="old-price">R$ {{ product.oldPrice }}</span>
      <span class="new-price">R$ {{ product.newPrice }}</span>
    </div>
    <div class="timer">
      <i class="icon-clock"></i> 10 min
    </div>
    <div class="quantity-controls">
      <button @click="decreaseQuantity">-</button>
      <span>{{ quantity }}</span>
      <button @click="increaseQuantity">+</button>
    </div>
    <button class="action-button" @click="addToCart">Quero!</button>
  </div>
</template>

<script>
export default {
  name: "ProductBox",
  props: {
    product: {
      type: Object,
      required: true,
    },
  },
  data() {
    return {
      quantity: 1,
    };
  },
  methods: {
    increaseQuantity() {
      this.quantity++;
    },
    decreaseQuantity() {
      if (this.quantity > 1) this.quantity--;
    },
    addToCart() {
      // Lógica para adicionar o produto ao carrinho
      alert(`Adicionado ${this.quantity} ${this.product.name}(s) ao carrinho!`);
    },
  },
};
</script>

<style scoped>
.product-box {
  border: 1px solid #ddd;
  border-radius: 8px;
  padding: 16px;
  text-align: center;
  background: #fff;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  position: relative;
}

.discount {
  background: red;
  color: #fff;
  padding: 4px 8px;
  position: absolute;
  top: 10px;
  left: 10px;
  border-radius: 4px;
  font-size: 12px;
}

.product-image {
  width: 100%;
  height: auto;
  margin-bottom: 8px;
  border-radius: 8px;
}

h3 {
  font-size: 18px;
  margin: 8px 0;
}

.description {
  font-size: 14px;
  color: #666;
}

.price-section {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
  margin: 8px 0;
}

.old-price {
  text-decoration: line-through;
  color: #999;
}

.new-price {
  color: red;
  font-weight: bold;
}

.timer {
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 8px 0;
  font-size: 14px;
  color: #666;
}

.quantity-controls {
  display: flex;
  justify-content: center;
  align-items: center;
  gap: 8px;
  margin: 16px 0;
}

.quantity-controls button {
  background: #ddd;
  border: none;
  border-radius: 4px;
  padding: 4px 8px;
  font-size: 16px;
  cursor: pointer;
}

.action-button {
  background: orange;
  color: #fff;
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  font-size: 16px;
  cursor: pointer;
}

.action-button:hover {
  background: darkorange;
}
</style>
