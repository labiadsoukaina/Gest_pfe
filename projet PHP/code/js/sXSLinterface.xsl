<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format">
<xsl:output method="html"/>
    <xsl:template match="/">
        <HTML>
            <body>
           <center><h2>Les Projets de Fin d'Etude :</h2></center>
<table border="1"  CELLPADDING="10" CELLSPACING="5">
<tr bgcolor="#7575a3">
<th>Identifiant PFE</th>
<th>Organisme d'accueil</th>
<th>Informations stagiaire</th>
<th>Informations stagiaire Binome</th>
<th>Informations sur le stage</th>
<th>Contacts Encadrants</th>
<th>Contacts Entreprises</th>
<th>Informations soutenance</th>
</tr>
<xsl:for-each select="PFE/projet">
<tr>
<td align="center"><xsl:value-of select="@ID"/></td> 

<td align="center"><xsl:value-of select="stage/Organisme/NomOraganisme"/></td>

<td align="center"><b>NometPrénom:</b><xsl:value-of select="Etudiant/Nom"/><br/><xsl:value-of select="Etudiant/Prénom"/><br/><b>Mail:</b><xsl:value-of select="Etudiant/Mail"/><br/><b>Téléphone:</b><xsl:value-of select="Etudiant/Tèlèphone"/><br/><b>Option:</b><xsl:value-of select="Etudiant/Option"/></td> 
<td align="center"><b>NometPrénom de binome:</b><xsl:value-of select="Etudiant2/Nom2"/><br/><xsl:value-of select="Etudiant2/Prénom2"/><br/><b>Mail de binome:</b><xsl:value-of select="Etudiant2/Mail2"/><br/><b>Téléphone de binome:</b><xsl:value-of select="Etudiant2/tel2"/><br/><b>Option de binome:</b><xsl:value-of select="Etudiant2/Option2"/></td>

<td align="center"><b>Intitulé:</b><xsl:value-of select="stage/Intitulé"/><br/><b>DateDébut:</b><xsl:value-of select="stage/DateDébut"/><br/><b>DateFin:</b><xsl:value-of select="stage/DateFin"/></td>
<td align="center"><b>Mme/M:</b><xsl:value-of select="EncadrantInterne/Nom"/>/<xsl:value-of select="EncadrantInterne/Prénom"/><br/><b>Téléphone:</b><xsl:value-of select="EncadrantInterne/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="EncadrantInterne/Mail"/><br/></td>

<td align="center"><u><b>Parrain:</b></u><br/>Mme/M:<xsl:value-of select="stage/Organisme/Parrain/NomParrain"/><xsl:value-of select="stage/Organisme/Parrain/PrénomParrain"/><br/><b>Fonction:</b><xsl:value-of select="stage/Organisme/Parrain/Fonction"/><br/><b>Téléphone:</b><xsl:value-of select="stage/Organisme/Parrain/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="stage/Organisme/Parrain/Mail"/><br/><u><b>EncadrantExterne:</b></u><br/>Mme/M:<xsl:value-of select="EncadrantExterne/Nom"/> / <xsl:value-of select="EncadrantExterne/Prénom"/><br/><b>Fonction:</b><xsl:value-of select="EncadrantExterne/Fonction"/><br/><b>Téléphone:</b><xsl:value-of select="EncadrantExterne/Téléphone"/><br/>Mail:<xsl:value-of select="EncadrantExterne/Mail"/></td>

<td align="center"><b>Date:</b><xsl:value-of select="soutenance/Date"/><br/><b>Local:</b><xsl:value-of select="soutenance/Local"/><br/><u><b>Jury:</b></u><br/><b>Président:</b><xsl:value-of select="soutenance/Jury/PrésidentJury"/><br/><b>Examinateur:</b><xsl:value-of select="soutenance/Jury/Examinateur"/><br/><b>Encadrant Interne:</b><xsl:value-of select="EncadrantInterne/Nom"/><br/><b>ReprèsentantsEntreprise:</b><xsl:value-of select="soutenance/Jury/représentantEntreprise"/></td> 
 </tr> 
 </xsl:for-each>   
 </table>         
    </body>
        </HTML>
    </xsl:template>

</xsl:stylesheet>
