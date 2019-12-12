
    
    const youTubePage = document.createElement('div');
        youTubePage.id = 'youtube';
    for (var i = 0; i < youTubeInspiration.length; i++)  {

        const h3Header = document.createElement('h3');
        const h5header = document.createElement('h5');
        const externalLink = document.createElement('a');
        const paragraph = document.createElement('p');
        const pageBreak = document.createElement('br');

        const linkAddress = document.createTextNode(youTubeInspiration[i][0]);
        const externalHomePage = document.createElement('a');
        const externalHomePageAddress = document.createTextNode("Visit Homepage");
        
        h3Header.className = 'h3text';
        externalLink.href = "https://" + youTubeInspiration[i][1];
        externalLink.target = "_blank";
        externalLink.className = "h3link";
        externalHomePage.className = "h5text" + " " + "h5link";
        paragraph.id = 'paragraph' + i;
        paragraph.textContent = youTubeInspiration[i][2];
        paragraph.className = 'paragraph ' +  'paragraph' + i;
        externalHomePage.href = "https://" + youTubeInspiration[i][3];
        externalHomePage.target = "_blank";
        externalLink.appendChild(linkAddress);
        h3Header.appendChild(externalLink);
        youTubePage.appendChild(h3Header);
        youTubePage.appendChild(paragraph);
        
        if (youTubeInspiration[i][3] !== undefined)  {
        h5header.appendChild(externalHomePage);
        externalHomePage.appendChild(externalHomePageAddress);
        youTubePage.appendChild(externalHomePage);
        }
        
    //youTubePage.appendChild(pageBreak);
    }

        bodytext.appendChild(youTubePage);