<script>
  let workspaces = [];
  let filteredWorkspaces = [];

const workspaceContainer = document.getElementById('workspace-container');
const workspaceCount = document.getElementById('workspace-count');

window.addEventListener('load', () => {
    //set loading state
    workspaceContainer.innerHTML = '<div class="text-center w-full">Loading...</div>';
    workspaceCount.innerHTML = 'Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">0</span> Coworking Space';


  fetch('http://cospace-project.localhost/v1/workspaces?include=categories,rooms&sort=-rating_count')
    .then((response) => response.json())
    .then((data) => {
      workspaces = data.data;
      workspaceContainer.innerHTML = '';
      workspaceCount.innerHTML = `Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">${data.data.length}</span> Coworking Space`;
      data.data.forEach((workspace) => {
        const workspaceCard = document.createElement('x-workspace-card');

        if (workspace.image.length === 0) {
          workspace.image = 'assets/images/rekom1.png';
        }else{
          workspace.image = workspace.image[0];
        }

        price = new Intl.NumberFormat('id-ID', {
          style: 'currency',
          currency: 'IDR',
        }).format(workspace.price);

        workspaceCard.innerHTML = `
          <x-workspace-card
            image="${workspace.image}"
            name="${workspace.name}"
            address="${workspace.address}"
            cost="${price}"
            rating="${workspace.rating_avg}"
            ulasan="${workspace.rating_count}"
          />
        `;
        workspaceContainer.appendChild(workspaceCard);
      });
    });
});

//Sort workspace
function sortWorkspace() {
  const sort = document.getElementById('sort').value;
  let sortedWorkspaces = workspaces;
  if(filteredWorkspaces.length > 0){
    sortedWorkspaces = filteredWorkspaces;
  }

  if (sort === 'lowest-price') {
    sortedWorkspaces.sort((a, b) => a.price - b.price);
  } else if (sort === 'highest-price') {
    sortedWorkspaces.sort((a, b) => b.price - a.price);
  } else if (sort === 'popular') {
    sortedWorkspaces.sort((a, b) => b.rating_count - a.rating_count); // make this descending
  }
  console.log(sortedWorkspaces);

  workspaceContainer.innerHTML = '';

  sortedWorkspaces.forEach((workspace) => {
    const workspaceCard = document.createElement('x-workspace-card');

    if (workspace.image.length === 0) {
      workspace.image = 'assets/images/rekom1.png';
    }else{
      workspace.image = workspace.image;
    }

    price = new Intl.NumberFormat('id-ID', {
      style: 'currency',
      currency: 'IDR',
    }).format(workspace.price);

    workspaceCard.innerHTML = `
      <x-workspace-card
        image="${workspace.image}"
        name="${workspace.name}"
        address="${workspace.address}"
        cost="${price}"
        rating="${workspace.rating_avg}"
        ulasan="${workspace.rating_count}"
      />
    `;
    workspaceContainer.appendChild(workspaceCard);
  });
}

//Filter workspace category
const categoryButtons = document.querySelectorAll('.category-button');
categoryButtons.forEach((button) => {
  button.addEventListener('click', () => {
    const category = button.value;

    if (category === 'all') {
     workspaceContainer.innerHTML = '<div class="text-center w-full">Loading...</div>';
     workspaceCount.innerHTML = 'Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">0</span> Coworking Space';
     filteredWorkspaces = [];


        fetch('http://cospace-project.localhost/v1/workspaces?include=categories,rooms')
            .then((response) => response.json())
            .then((data) => {
            workspaces = data.data;
            workspaceContainer.innerHTML = '';
            workspaceCount.innerHTML = `Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">${data.data.length}</span> Coworking Space`;
            data.data.forEach((workspace) => {
                const workspaceCard = document.createElement('x-workspace-card');

                if (workspace.image.length === 0) {
                workspace.image = 'assets/images/rekom1.png';
                }else{
                workspace.image = workspace.image[0];
                }

                price = new Intl.NumberFormat('id-ID', {
                style: 'currency',
                currency: 'IDR',
                }).format(workspace.price);

                workspaceCard.innerHTML = `
                <x-workspace-card
                    image="${workspace.image}"
                    name="${workspace.name}"
                    address="${workspace.address}"
                    cost="${price}"
                    rating="${workspace.rating_avg}"
                    ulasan="${workspace.rating_count}"
                />
                `;
                workspaceContainer.appendChild(workspaceCard);
            });
            });
    } else {
      filteredWorkspaces = workspaces.filter((workspace) => {
        return workspace.categories.some((cat) => cat.name === category);
      });

      workspaceContainer.innerHTML = '';
      workspaceCount.innerHTML = `Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">${filteredWorkspaces.length}</span> Coworking Space`;

      filteredWorkspaces.forEach((workspace) => {
        const workspaceCard = document.createElement('x-workspace-card');

        if (workspace.image.length === 0) {
          workspace.image = 'assets/images/rekom1.png';
        }

        price = new Intl.NumberFormat('id-ID', {
          style: 'currency',
          currency: 'IDR',
        }).format(workspace.price);

        workspaceCard.innerHTML = `
          <x-workspace-card
            image="${workspace.image}"
            name="${workspace.name}"
            address="${workspace.address}"
            cost="${price}"
            rating="${workspace.rating_avg}"
            ulasan="${workspace.rating_count}"
          />
        `;
        workspaceContainer.appendChild(workspaceCard);
      });

      if (filteredWorkspaces.length === 0) {
        workspaceContainer.innerHTML = '<div class="text-center w-full mt-12">Tidak ada workspace yang ditemukan</div>';
      }

    }
  });
});
</script>
