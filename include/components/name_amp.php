<style>
    .main_logo {
        background: linear-gradient(135deg, #1a237e 0%, #283593 60%, #3949ab 100%);
        padding: 0 10px;
        display: block;
        color: #fff;
        margin-bottom: 3px;
        letter-spacing: 1px;
        font-weight: 700;
        border: 3px solid #7986cb;
        border-radius: .75em;
        transform-style: preserve-3d;
        transition: transform 150ms cubic-bezier(0, 0, .58, 1), background 150ms cubic-bezier(0, 0, .58, 1);
        box-shadow: 0 4px 15px rgba(26, 35, 126, 0.4)
    }
</style>

<?php 
if (!isset($basePath)) {
    $scriptName = $_SERVER['SCRIPT_NAME'] ?? '';
    $basePath = (strpos($scriptName, '/spboss_mobi/') === 0) ? '/spboss_mobi/' : '/';
}
?>
<div class="main_logo" style="padding:16px;" id="top">

    <a href="<?php echo $basePath; ?>index.php" style="color: white;text-decoration: none;">
        <h3 >Spboss.Mobi</h3>
    </a>
</div>


<?php if (0) { ?>
    <div id="top"></div>
    <a href="#bottom" class="button2"> Go to Bottom </a>
<?php } ?>