<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1>
          <Link href="/">SoftLand</Link>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <Link class="active" href="/">Home</Link>
          </li>
          <li>
            <Link href="/todo">Todo</Link>
          </li>
          <li><a href="features.html">Features</a></li>
          <li><a href="pricing.html">Pricing</a></li>
          <li><a href="blog.html">Blog</a></li>
          <li><a href="contact.html">Contact Us</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
</template>