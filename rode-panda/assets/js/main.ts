// Nav buttons (go to bottom, go to top, rand project)
const gotoBottomBtn = document.getElementById('gotoBottomBtn');
if(gotoBottomBtn)
{
    gotoBottomBtn.addEventListener('click', (ev) => {
        const footer = document.getElementById('footer');
        if(!footer) { return; }
        footer.scrollIntoView({
            'behavior': 'smooth'
        });
        return false;
    })
}

const gotoTopBtn = document.getElementById('gotoTopBtn')
if(gotoTopBtn)
{
    gotoTopBtn.addEventListener('click', (ev) => {
        window.scrollTo({top: 0, behavior: 'smooth'});
        return false;
    });
}

const randProjBtn = document.getElementById('randProjBtn');
if(randProjBtn)
{
    randProjBtn.addEventListener('click', (ev) => {
        const metadataNode = document.getElementById("hidden-hugo-metadata");
        if(!metadataNode || !metadataNode.dataset.pages) { return; }
        const projectList = metadataNode.dataset.pages.split(",");

        const randURL = projectList[Math.floor(Math.random() * projectList.length)];
        window.location.href = randURL;
        return false;
    })
}