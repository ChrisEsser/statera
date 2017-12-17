<div style="text-align: center">
<h1 style="font-size: 3em;">Framework Installed</h1>

<p><?=(empty(getenv('DB_HOST')) || empty(getenv('DB_NAME'))) ? 'Database not initialized' : 'Database initialized'?></p>

</div>