<!-- components/Footer.php -->
<footer class="site-footer">
  <div class="container">
    <p>© <?= date('Y') ?> Shopbag. جميع الحقوق محفوظة.</p>
    <ul class="footer-links">
      <li><a href="privacy.php">سياسة الخصوصية</a></li>
      <li><a href="terms.php">الشروط والأحكام</a></li>
    </ul>
  </div>
</footer>

<style>
  .site-footer {
    background-color: #f8f8f8;
    padding: 20px 0;
    text-align: center;
    margin-top: 50px;
    border-top: 1px solid #eaeaea;
  }

  .footer-links {
    margin-top: 10px;
    list-style: none;
    display: flex;
    justify-content: center;
    gap: 20px;
    padding: 0;
  }

  .footer-links a {
    color: #555;
    text-decoration: none;
  }

  .footer-links a:hover {
    color: #000;
  }
</style>
