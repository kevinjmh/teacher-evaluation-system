<!-- xml声明 -->
<?xml version="1.0"?>
<!-- xsl样式表声明 -->
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="2.0">
<!-- <xsl:variable />变量定义 -->
<!-- 【内容略】 -->
<!-- 匹配根 -->
<xsl:template match="/">
    <html>
        <head>        
            <title>Course Selecting System</title>
            <!-- 引入外部css -->
             <link href="css/style.css" rel="stylesheet" type="text/css"/>
            <!-- javascript脚本 -->
            <script type="text/javascript"> 
                <!-- 【内容略】 -->
            </script>
        </head>
        <body>
            <!-- 问候区 -->
            <!-- 【内容略】 -->
            <h1 align="center">Course Selecting System </h1>
            <!-- 导航区 -->
            <!-- 【内容略】 -->
            <table border="0" align="center">
                <!-- 表头 -->
                    <!-- 【内容略】 -->
                <!-- 表格内容，choose判断调用模板显示-->
                    <!-- 【内容略】 -->            
            </table> 
        </body>
    </html>
</xsl:template>

<xsl:template name="stu_showtable">
    <!-- 【内容略】 -->
</xsl:template>
    <xsl:template name="tea_showtable">
    <!-- 【内容略】 -->
</xsl:template>
<xsl:template name="admin_showtable">
    <!-- 【内容略】 -->  
</xsl:template>
</xsl:stylesheet>