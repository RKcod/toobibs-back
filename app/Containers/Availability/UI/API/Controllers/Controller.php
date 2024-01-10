<?php

namespace App\Containers\Availability\UI\API\Controllers;

use App\Containers\Availability\UI\API\Requests\CreateAvailabilityRequest;
use App\Containers\Availability\UI\API\Requests\DeleteAvailabilityRequest;
use App\Containers\Availability\UI\API\Requests\GetAllAvailabilitiesRequest;
use App\Containers\Availability\UI\API\Requests\GetAvailabilitiesByStatusAndDateRequest;
use App\Containers\Availability\UI\API\Requests\FindAvailabilityByIdRequest;
use App\Containers\Availability\UI\API\Requests\UpdateAvailabilityRequest;
use App\Containers\Availability\UI\API\Transformers\AvailabilityTransformer;
use App\Ship\Parents\Controllers\ApiController;
use Apiato\Core\Foundation\Facades\Apiato;

/**
 * Class Controller
 *
 * @package App\Containers\Availability\UI\API\Controllers
 */
class Controller extends ApiController
{
    /**
     * @param CreateAvailabilityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createAvailability(CreateAvailabilityRequest $request)
    {
        $availability = Apiato::call('Availability@CreateAvailabilityAction', [$request]);

        return $this->created($this->transform($availability, AvailabilityTransformer::class));
    }

    /**
     * @param FindAvailabilityByIdRequest $request
     * @return array
     */
    public function findAvailabilityById(FindAvailabilityByIdRequest $request)
    {
        $availability = Apiato::call('Availability@FindAvailabilityByIdAction', [$request]);

        return $this->transform($availability, AvailabilityTransformer::class);
    }

    /**
     * @param GetAllAvailabilitiesRequest $request
     * @return array
     */
    public function getAllAvailabilities(GetAllAvailabilitiesRequest $request)
    {
        $availabilities = Apiato::call('Availability@GetAllAvailabilitiesAction', [$request]);

        return $this->transform($availabilities, AvailabilityTransformer::class);
    }

    /**
     * @param GetAvailabilitiesByStatusAndDateRequest $request
     * @return array
     */
    public function getAllAvailabilitiesByStatusAndDate(GetAvailabilitiesByStatusAndDateRequest $request)
    {
        $availabilities = Apiato::call('Availability@GetAvailabilitiesByStatusAndDateAction', [$request]);

        return $this->transform($availabilities, AvailabilityTransformer::class);
    }

    /**
     * @param UpdateAvailabilityRequest $request
     * @return array
     */
    public function updateAvailability(UpdateAvailabilityRequest $request)
    {
        $availability = Apiato::call('Availability@UpdateAvailabilityAction', [$request]);

        return $this->transform($availability, AvailabilityTransformer::class);
    }

    /**
     * @param DeleteAvailabilityRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAvailability(DeleteAvailabilityRequest $request)
    {
        Apiato::call('Availability@DeleteAvailabilityAction', [$request]);

        return $this->noContent();
    }
}
