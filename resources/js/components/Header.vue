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
          <li><Link href="/todo">Todo</Link></li>
          <li><Link href="/quote">Quote</Link></li>
          <li><Link href="/features">Features</Link></li>
          <li><Link href="/blog">Blog</Link></li>
          <li><Link href="/contact">Contact Us</Link></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
</template>