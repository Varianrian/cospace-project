<div class="pointer-events-none fixed inset-0 z-50 mt-8 flex hidden h-fit justify-end px-4 py-6" id="toast-container">
  <!-- Toasts go here -->
  <div
    id="toast-default"
    class="flex w-full max-w-xs items-center rounded-lg border border-[#B3B3B3] bg-white p-4 text-gray-500 shadow"
    role="alert"
  >
    <div class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg" id="toast-icon"></div>
    <div class="ms-3 text-sm font-normal" id="toast-message"></div>
    <button
      type="button"
      class="-mx-1.5 -my-1.5 ms-auto inline-flex h-8 w-8 items-center justify-center rounded-lg bg-white p-1.5 text-gray-400 hover:bg-gray-100 hover:text-gray-900 focus:ring-2 focus:ring-gray-300 dark:bg-gray-800 dark:text-gray-500 dark:hover:bg-gray-700 dark:hover:text-white"
      data-dismiss-target="#toast-default"
      aria-label="Close"
    >
      <span class="sr-only">Close</span>
      <svg class="h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
        <path
          stroke="currentColor"
          stroke-linecap="round"
          stroke-linejoin="round"
          stroke-width="2"
          d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"
        />
      </svg>
    </button>
  </div>
</div>

<script>
  const toastContainer = document.getElementById('toast-container');
  const toastDefault = document.getElementById('toast-default');
  const toastMessage = document.getElementById('toast-message');
  const toastIcon = document.getElementById('toast-icon');

  const icons = {
    success: `<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.7988 10.1112C19.7988 15.4615 15.4616 19.7987 10.1113 19.7987C4.76105 19.7987 0.423828 15.4615 0.423828 10.1112C0.423828 4.76093 4.76105 0.423706 10.1113 0.423706C15.4616 0.423706 19.7988 4.76093 19.7988 10.1112ZM8.99078 15.2407L16.1783 8.05316C16.4223 7.8091 16.4223 7.41335 16.1783 7.16929L15.2944 6.28543C15.0504 6.04132 14.6546 6.04132 14.4105 6.28543L8.54883 12.1471L5.81215 9.41039C5.56809 9.16632 5.17234 9.16632 4.92824 9.41039L4.04437 10.2943C3.80031 10.5383 3.80031 10.9341 4.04437 11.1781L8.10688 15.2406C8.35098 15.4847 8.74668 15.4847 8.99078 15.2407Z" fill="#55B938"/></svg>`,
    error: `<svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.8889 10.2222C20.8889 15.7462 16.4114 20.2222 10.8889 20.2222C5.36646 20.2222 0.888916 15.7462 0.888916 10.2222C0.888916 4.70132 5.36646 0.222168 10.8889 0.222168C16.4114 0.222168 20.8889 4.70132 20.8889 10.2222ZM10.8889 12.2383C9.86452 12.2383 9.03408 13.0687 9.03408 14.0931C9.03408 15.1175 9.86452 15.948 10.8889 15.948C11.9133 15.948 12.7438 15.1175 12.7438 14.0931C12.7438 13.0687 11.9133 12.2383 10.8889 12.2383ZM9.12791 5.57112L9.42702 11.055C9.44101 11.3116 9.65319 11.5125 9.91017 11.5125H11.8677C12.1246 11.5125 12.3368 11.3116 12.3508 11.055L12.6499 5.57112C12.665 5.29394 12.4444 5.06088 12.1668 5.06088H9.61101C9.33343 5.06088 9.11279 5.29394 9.12791 5.57112Z" fill="#D65745"/></svg>`,
  };

  function showToast(message, type = 'default') {
    toastMessage.textContent = message;
    toastContainer.classList.remove('hidden');
    toastDefault.classList.remove('hidden');

    if (type === 'success') {
      toastIcon.innerHTML = icons.success;
    } else if (type === 'error') {
      toastIcon.innerHTML = icons.error;
    }

    setTimeout(() => {
      toastDefault.classList.add('hidden');
      toastContainer.classList.add('hidden');
    }, 5000);
  }

  document.addEventListener('DOMContentLoaded', () => {
    window.showToast = showToast;
  });

  document.addEventListener('click', (event) => {
    const dismissTarget = event.target.closest('[data-dismiss-target]');

    if (dismissTarget) {
      const target = document.getElementById(dismissTarget.getAttribute('data-dismiss-target'));
      target.classList.add('hidden');
      toastContainer.classList.add('hidden');
    }
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      toastDefault.classList.add('hidden');
      toastContainer.classList.add('hidden');
    }
  });

  @if(session('status'))
    showToast('{{ session('message') }}', '{{ session('status') }}');
  @endif
</script>
