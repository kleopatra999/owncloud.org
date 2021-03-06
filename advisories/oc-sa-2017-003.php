<div class="row page-content-header">
<div class="col-md-4">
    <h1>Security Advisory</h1>
    <a href="/security/advisories/">Back to advisories</a>
</div>
</div>
<div class="row">
    <div class="col-md-4">
        <?php get_template_part('advisories/advisory-side'); ?>
    </div>
    <div class="col-md-8">
        <h2>Flooding logfiles with a 1 Bit BMP File (oC-SA-2017-003)</h2>
        <p>2nd February 2017</p>
        <p>Risk level: <strong>Medium</strong></p>
        <p>CVSS v3 Base Score: 4.1 (<a href="https://www.first.org/cvss/calculator/3.0#CVSS:3.0/CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:N/A:N">CVSS:3.0/AV:N/AC:L/PR:L/UI:R/S:C/C:L/I:N/A:N</a>)</p>
        <p>CWE: <a href="https://cwe.mitre.org/data/definitions/779.html">Logging of Excessive Data (CWE-779)</a></p>
        <h3>Description</h3>
        <p><p>An Attacker can upload a 1 Bit BMP File and the server hangs and doesn't stop to populate a logfile</p>
</p>
        <h3>Affected Software</h3>
        <ul>
            <li>ownCloud Server &lt; <strong>9.1.3</strong> (CVE-2017-5867)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/0f1da72db6cd3ca08d166d96c57f39b8563d048f">core/0f1da72db6cd3ca08d166d96c57f39b8563d048f</a></li>
</ul>
<li>ownCloud Server &lt; <strong>9.0.7</strong> (CVE-2017-5867)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/69fcf706fc7125c028b87fe8224a544ff124dc4b">core/69fcf706fc7125c028b87fe8224a544ff124dc4b</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.2.9</strong> (CVE-2017-5867)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/83da5e2ce952c042abb9ba88c293795b750cde89">core/83da5e2ce952c042abb9ba88c293795b750cde89</a></li>
</ul>
<li>ownCloud Server &lt; <strong>8.1.11</strong> (CVE-2017-5867)</li>
<ul>
<li><a href="https://github.com/owncloud/core/commit/45fc1aa6f9200fe55e417eed02e18c965fe09872">core/45fc1aa6f9200fe55e417eed02e18c965fe09872</a></li>
</ul>

        </ul>
        <h3>Action Taken</h3>
        <p>Suppress error messages with 1 Bit BMP Files</p>
        <h3>Acknowledgements</h3>
        <p>The ownCloud team thanks the following people for their research and responsible disclosure of the above advisory:</p>
        <ul>
            <li><a href="https://github.com/Temtaime" target="_blank" rel="noreferrer">Temtaime - Vulnerability discovery and disclosure.</a></li>
        </ul>
        <br/>
    </div>
</div>
