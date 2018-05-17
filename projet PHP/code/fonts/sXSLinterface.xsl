<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform" xmlns:fo="http://www.w3.org/1999/XSL/Format">
<xsl:output method="html"/>
    <xsl:template match="/">
        <HTML>
		   <body>
           <center><h2>Les Projets de Fin d'Etude :</h2></center>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #00FFFF}

th {
    background-color: #0000FF;
    color: white;
}
</style>

<tr>
<th>Identifiant PFE</th>
<th>Organisme d'accueil</th>
<th>Informations stagiaire</th>
<th>Informations sur le stage</th>
<th>Contacts Encadrants</th>
<th>Contacts Entreprises</th>
<th>Informations soutenance</th>
</tr>
<xsl:for-each select="PFE/projet">
<tr>
<td align="center"><xsl:value-of select="@ID"/></td> 

<td align="center"><xsl:value-of select="stage/Organisme/NomOrganisme"/></td>

<td align="center"><b>NomtPrénom:</b><xsl:value-of select="Etudiant/Nom"/><br/><xsl:value-of select="Etudiant/Prénom"/><br/><b>Mail:</b><xsl:value-of select="Etudiant/Mail"/><br/><b>Téléphone:</b><xsl:value-of select="Etudiant/Téléphone"/><br/><b>Option:</b><xsl:value-of select="Etudiant/option"/></td> 

<td align="center"><b>Intitulé:</b><xsl:value-of select="stage/Intitulé"/><br/><b>DateDébut:</b><xsl:value-of select="stage/DateDébut"/><br/><b>DateFin:</b><xsl:value-of select="stage/DateFin"/></td>
<td align="center"><b>Mme/M:</b><xsl:value-of select="Encadrants/EncadrantInterne/Nom"/>/<xsl:value-of select="Encadrants/EncadrantInterne/Prénom"/><br/><b>Téléphone:</b><xsl:value-of select="Encadrants/EncadrantInterne/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="Encadrants/EncadrantInterne/Mail"/><br/></td>

<td align="center"><u><b>Parrain:</b></u><br/>Mme/M:<xsl:value-of select="stage/Organisme/Parrain/NomParrain"/><xsl:value-of select="stage/Organisme/Parrain/PrénomParrain"/><br/><b>Fonction:</b><xsl:value-of select="stage/Organisme/Parrain/Fonction"/><br/><b>Téléphone:</b><xsl:value-of select="stage/Organisme/Parrain/Téléphone"/><br/><b>Mail:</b><xsl:value-of select="stage/Organisme/Parrain/Mail"/><br/><u><b>EncadrantExterne:</b></u><br/>Mme/M:<xsl:value-of select="Encadrants/EncadrantExterne/Nom"/> / <xsl:value-of select="Encadrants/EncadrantExterne/Prénom"/><br/><b>Fonction:</b><xsl:value-of select="Encadrants/EncadrantExterne/Fonction"/><br/><b>Téléphone:</b><xsl:value-of select="Encadrants/EncadrantExterne/Téléphone"/><br/>Mail:<xsl:value-of select="Encadrants/EncadrantExterne/Mail"/></td>

<td align="center"><b>Date:</b><xsl:value-of select="soutenance/Date"/><br/><b>Local:</b><xsl:value-of select="soutenance/Local"/><br/><u><b>Jury:</b></u><br/><b>Président:</b><xsl:value-of select="soutenance/Jury/PrésidentJury"/><br/><b>Examinateur:</b><xsl:value-of select="soutenance/Jury/Examinateur"/><br/><b>Encadrants:</b><xsl:value-of select="soutenance/Jury/Encadrants"/><br/><b>ReprèsentantsEntreprise:</b><xsl:value-of select="soutenance/Jury/ReprésentantsEntreprise"/></td> 
 </tr> 
 </xsl:for-each>           
    </body>
        </HTML>
    </xsl:template>

</xsl:stylesheet>
