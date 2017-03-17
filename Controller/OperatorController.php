<?php
/*
 * This file is a part of Mibew External API Plugin.
 * 
 *  Amended by Sean Newell for Dorian Business Systems
 *
 * Copyright 2015 Dmitriy Simushev <simushevds@gmail.com>.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Mibew\Mibew\Plugin\ExternalApi\Controller;

use Mibew\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Process all API calls related with operators.
 */
class OperatorController extends AbstractController
{
    public function anyOperatorsOnline(Request $request)
    {
        return new JsonResponse((object) ['anyOperatorsOnline' => has_online_operators()]);
    }
}
