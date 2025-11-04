    </main>

    <footer class="wpl-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>WPL Summit</h3>
                    <p>Women Political Leaders Network Summit bringing together influential leaders from around the world.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer-menu',
                        'menu_class'     => 'footer-links',
                        'container'      => false,
                    ) );
                    ?>
                </div>
                
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <p>Email: info@wplsummit.org</p>
                    <p>Phone: +1 (555) 123-4567</p>
                    <p>Address: 123 Summit Ave, City, Country</p>
                </div>
                
                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <div class="social-links">
                        <a href="#">LinkedIn</a>
                        <a href="#">Twitter</a>
                        <a href="#">Facebook</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('2026'); ?> WPL Summit. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
</body>
</html>
