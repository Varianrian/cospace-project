<div class="absolute inset-x-0 top-0 z-50 flex flex-col items-end space-y-4 p-4" id="toast-container">
  <!-- Toasts go here -->
  <div
    id="toast-default"
    class="flex w-full max-w-xs items-center rounded-lg bg-white p-4 text-gray-500 shadow dark:bg-gray-800 dark:text-gray-400"
    role="alert"
  >
    <div
      class="inline-flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-lg"
    >
      <svg width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_237_113)">
          <path
            d="M19.7988 10.1112C19.7988 15.4615 15.4616 19.7987 10.1113 19.7987C4.76105 19.7987 0.423828 15.4615 0.423828 10.1112C0.423828 4.76093 4.76105 0.423706 10.1113 0.423706C15.4616 0.423706 19.7988 4.76093 19.7988 10.1112ZM8.99078 15.2407L16.1783 8.05316C16.4223 7.8091 16.4223 7.41335 16.1783 7.16929L15.2944 6.28543C15.0504 6.04132 14.6546 6.04132 14.4105 6.28543L8.54883 12.1471L5.81215 9.41039C5.56809 9.16632 5.17234 9.16632 4.92824 9.41039L4.04437 10.2943C3.80031 10.5383 3.80031 10.9341 4.04437 11.1781L8.10688 15.2406C8.35098 15.4847 8.74668 15.4847 8.99078 15.2407Z"
            fill="#55B938"
          />
        </g>
        <defs>
          <clipPath id="clip0_237_113">
            <rect width="20" height="20" fill="white" transform="translate(0.111206 0.111145)" />
          </clipPath>
        </defs>
      </svg>

      <span class="sr-only">Fire icon</span>
    </div>
    <div class="ms-3 text-sm font-normal">Set yourself free.</div>
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
