<script type=text/javascript>

function MAX_MANAGER() {
    File="explorer <?php print MAX_DIR; ?>MAX_Manager2.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}	

function MAX_POSTO() {
    File="explorer <?php print MAX_DIR; ?>MAX_POSTO2.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_MANUTE() {
    File="explorer <?php print MAX_DIR; ?>MAX_Manute.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_SPED_MANUTE() {
    File="explorer <?php print MAX_DIR; ?>Max_SpedManute.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}	

function MAX_PDV_NFCE() {
    File="explorer <?php print MAX_DIR; ?>Max_PDV_NFCE.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_PDV_POSTO() {
    File="explorer <?php print MAX_DIR; ?>MAX_POSTO_NFCE.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_FOOD() {
    File="explorer <?php print MAX_DIR; ?>MAX_Food2.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_FARMACIA() {
    File="explorer <?php print MAX_DIR; ?>MAX_Farmacia.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_PDV_SINCRONIZA() {
    File="explorer <?php print MAX_DIR; ?>Max_PDV_Sincroniza2.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_PRINT_MANAGER() {
    File="explorer <?php print MAX_DIR; ?>MAX_PRINT_MANAGER.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_VENDAS_ANDROID_SINCRONIZA() {
    File="explorer <?php print MAX_DIR; ?>Max_vendas_Android_Sincroniza.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function MAX_ATUALIZA() {
    File="explorer <?php print MAX_DIR; ?>MAX_Atualiza.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function SQL_MANAGER() {
    File="C:\\Windows\\SysWOW64\\mmc.exe /32 C:\\Windows\\SysWOW64\\SQLServerManager12.msc";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}	

function SQL_TOOLS() {
    File="explorer <?php print SQL_TOOLS; ?>MsManager.exe";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}	

function LOCAL_MAX() {
    File="explorer <?php echo MAX_DIR; ?>";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

function CMD() {
    File="cmd";
    WSH=new ActiveXObject("WScript.Shell");
    WSH.run(File);
}

</script>