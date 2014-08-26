<?php echo '<?xml version="1.0" encoding="UTF-8" ?>' ?>
<?php $uri = "sitemap.xsl"; ?>
<?php echo '<?xml-stylesheet type="text/xsl" href="' . $uri . '"?>' ?>
<urlset xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <url>
        <loc><?php echo Router::url('/', true); ?></loc>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
    </url>
    <url>
        <loc><?php echo Router::url('/', true); ?></loc>
        <priority>0.5</priority>
        <changefreq>daily</changefreq>
        <lastmod><?php echo CakeTime::toAtom(date("Y-m-d h:i:s")) ?> </lastmod>
    </url>
</urlset>