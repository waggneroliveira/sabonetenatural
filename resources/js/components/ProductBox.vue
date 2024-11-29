<template>
  <div v-for="(product, index) in products" :key="index">
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
        <button @click="decreaseQuantity(product)">-</button>
        <span>{{ product.quantity }}</span>
        <button @click="increaseQuantity(product)">+</button>
      </div>
      <button class="action-button" @click="addToCart(product)">Quero!</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "ProductBox",
  data() {
    return {
      products: [
        {
          name: 'SUSHI TAMAKI',
          japaneseName: '刺身',
          description: 'Salmão, camarão panado, queijo creme, cebolinho, olho francês e molho tarê',
          oldPrice: 79.00,
          newPrice: 59.00,
          image: '/build/client/images/sushi.png',
          quantity: 1,
        },
        {
          name: 'SUSHI TAMAKI 01',
          japaneseName: '刺身',
          description: 'Salmão, camarão panado, queijo creme, cebolinho, olho francês e molho tarê',
          oldPrice: 89.00,
          newPrice: 69.00,
          image: '/build/client/images/sushi.png',
          quantity: 1,
        },
      ],
    };
  },
  methods: {
    increaseQuantity(product) {
      product.quantity++;
    },
    decreaseQuantity(product) {
      if (product.quantity > 1) product.quantity--;
    },
    addToCart(product) {
      alert(`Adicionado ${product.quantity} ${product.name}(s) ao carrinho!`);
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
