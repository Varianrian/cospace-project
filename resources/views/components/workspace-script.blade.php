<script>
  let workspaces = [];
  let filteredWorkspaces = [];
  const appUrl = @php echo json_encode(config('app.url')); @endphp;
  const queryParam = new URLSearchParams(window.location.search);
  const search = queryParam.get('search');

const workspaceContainer = document.getElementById('workspace-container');
const workspaceCount = document.getElementById('workspace-count');

window.addEventListener('load', () => {
    //set loading state
    workspaceContainer.innerHTML = '<div class="text-center w-full">Loading...</div>';
    workspaceCount.innerHTML = 'Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">0</span> Coworking Space';

    let endpoint = appUrl + '/v1/workspaces?include=categories,rooms,facilities&sort=-rating_count';
    if (search)
     endpoint = endpoint + `&search=${search}`;

    fetch(endpoint)
    .then((response) => response.json())
    .then((data) => {
      workspaces = data.data;
      filteredWorkspaces = workspaces;
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
            id="${workspace.id}"
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
  console.log(filteredWorkspaces);
  sortedWorkspaces = filteredWorkspaces;

  if (sort === 'lowest-price') {
    sortedWorkspaces.sort((a, b) => a.price - b.price);
  } else if (sort === 'highest-price') {
    sortedWorkspaces.sort((a, b) => b.price - a.price);
  } else if (sort === 'popular') {
    sortedWorkspaces.sort((a, b) => b.rating_count - a.rating_count); // make this descending
  }

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
        id="${workspace.id}"
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

        fetch(appUrl + '/v1/workspaces?include=categories,rooms,facilities&sort=-rating_count')
            .then((response) => response.json())
            .then((data) => {
            workspaces = data.data;
            filteredWorkspaces = workspaces;
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
                    id="${workspace.id}"
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
            id="${workspace.id}"
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

//Filter workspace from form
function formSubmit(event){
    event.preventDefault();
    const form = new FormData(event.target);

    const price = form.get('price');
    const facilities = form.getAll('facilities');
    const capacities = form.getAll('capacity');

    filteredWorkspaces = workspaces.filter((workspace) => {
        let isPrice = true;
        let isFacilities = true;
        let isCapacities = true;

        if(price !== null){
            // isPrice = workspace.price <= price;
            if (price === '0') {
                isPrice = workspace.price <= 50000;
            } else if (price === '1') {
                isPrice = workspace.price > 50000 && workspace.price <= 100000;
            } else if (price === '2') {
                isPrice = workspace.price > 100000 && workspace.price <= 200000;
            } else if (price === '3') {
                isPrice = workspace.price > 200000 && workspace.price <= 500000;
            }
        }

        if(facilities.length > 0){
            isFacilities = facilities.every((facility) => {
                return workspace.facilities.some((fac) => fac.name === facility);
            });
        }

        return isPrice && isFacilities;
    });

    workspaceContainer.innerHTML = '';
    workspaceCount.innerHTML = `Ditemukan <span class="text-[#0021A3]" id="workspace-count-number">${filteredWorkspaces.length}</span> Coworking Space`;

    sortWorkspace();
}
</script>
