
    
    const websiteToolsPage = document.createElement('div');
        websiteToolsPage.id = 'websitetools';
    for (var i = 0; i < websiteTools.length; i++)  {

        const h3Header = document.createElement('h3');
        const h5header = document.createElement('h5');
        const externalLink = document.createElement('a');
        const paragraph = document.createElement('p');
        const pageBreak = document.createElement('br');

        const linkAddress = document.createTextNode(websiteTools[i][0]);
        const externalHomePage = document.createElement('a');
        const externalHomePageAddress = document.createTextNode("Click for more information on WCAG 2.0");
        
        h3Header.className = 'h3text';
        externalLink.href = "https://" + websiteTools[i][1];
        externalLink.target = "_blank";
        externalLink.className = "h3link";
        externalHomePage.className = "h5text" + " " + "h5link";
        paragraph.id = 'paragraph' + i;
        paragraph.textContent = websiteTools[i][2];
        paragraph.className = 'paragraph ' +  'paragraph' + i;
        externalHomePage.href = "https://" + websiteTools[i][3];
        externalHomePage.target = "_blank";
        externalLink.appendChild(linkAddress);
        h3Header.appendChild(externalLink);
        websiteToolsPage.appendChild(h3Header);
        websiteToolsPage.appendChild(paragraph);
        
        if (websiteTools[i][3] !== undefined)  {
        h5header.appendChild(externalHomePage);
        externalHomePage.appendChild(externalHomePageAddress);
        websiteToolsPage.appendChild(externalHomePage);
        }
        
        //websiteToolsPage.appendChild(pageBreak);
    }

        bodytext.appendChild(websiteToolsPage);