<?php

namespace App\Controller;

use App\Entity\Room;
use App\Repository\RoomRepository;
use App\Entity\Reserve;
use App\Repository\ReserveRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class RoomController extends AbstractController
{
    /**
     * @Route("/room/{id}", name="room")
     * @param RoomRepository $roomrepo
     * @return Response
     */
    public function room(Request $request, RoomRepository $roomrepo)
    {   
        $id = $request->get('id');
        $location = $request->get('location') ? $request->get('location') : "";
        $entrada = $request->get('entrada') ? $request->get('entrada') : "";
        $salida = $request->get('salida') ? $request->get('salida') : "";
        $guest = $request->get('guest') ? $request->get('guest') : 0;
        $price = $request->get('price');
        
        if($entrada != "" && $salida != ""){
            // $entrada = $entrada->format('Y-m-d');
            // $entradaDate = \DateTime::createFromFormat('Y-m-d', $entrada); 

            // $salida = $salida->format('Y-m-d');
            // $salidaDate = \DateTime::createFromFormat('Y-m-d', $salida); 

            $entradaDate = strtotime($entrada);
            $salidaDate = strtotime($salida);
            $datediff = $salidaDate - $entradaDate;
            
            $price = round(($datediff / (60 * 60 * 24)) * $price);

        }

        $room = $roomrepo->find($id);

        
        return $this->render('room/index.html.twig', [
            'room' => $room,
            'entrada' => $entrada,
            'salida' => $salida,
            'guest' => $guest,
            'totalPrice' => $price,
        ]);
    }

    
    /**
     * @Route("/apartments", name="apartments")
     * @param RoomRepository $roomrepo
     * @return Response
     */
    public function apartments(Request $request, RoomRepository $roomrepo)
    {
        $location = $request->get('location') ? $request->get('location') : "";
        $entrada = $request->get('entrada') ? $request->get('entrada') : "";
        $salida = $request->get('salida') ? $request->get('salida') : "";
        $guest = $request->get('guest') ? $request->get('guest') : 0;
        $total = 0;

        $rooms = $roomrepo->createQueryBuilder('room')
            ->andWhere('room.location LIKE :location')
            ->andWhere('room.maxGuest >= :guest')
            ->setParameter('location', '%'.$location.'%')
            ->setParameter('guest', $guest)
            ->getQuery()
            ->execute();

        foreach ($rooms as $room) {
            $total++;  
        }

        return $this->render('apartments/index.html.twig', [
            'rooms' => $rooms,
            'total' => $total,
            'location' => $location,
            'entrada' => $entrada,
            'salida' => $salida,
            'guest' => $guest,
            
        ]);
    }

    /**
     * @Route("/createreserve", name="createreserve")
     * @param ReserveRepository $reserverepo
     * @return Response
     */
    public function createreserve(Request $request,ReserveRepository $reserverepo)
    {
        // $reserve = new Reserve();

        // $rooms = $roomrepo->createQueryBuilder('reserve')
        //     ->andWhere('room.id == :id')
        //     ->andWhere('room.maxGuest >= :guest')
        //     ->setParameter('id', $id)
        //     ->setParameter('guest', $guest)
        //     ->getQuery()
        //     ->execute();

        // $em = $this->getDoctrine()->getManager();

        // $em->persist($reserve);
        // $em->flush();

        // return $this->redirect($this->generateUrl(route: 'room.apartments'));
    }
}
