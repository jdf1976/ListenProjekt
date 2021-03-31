<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SiteController extends AbstractController
{
    /**
     * @Route ("/", name="app_homepage")
     */
    public function Homepage()
    {
        //hier ist alles was auf der Startseite steht
        return new Response();

    }

    /**
     * @Route ("/namen", name="app_namen")
     */
    public function Namen()
    {
        //hier werden die Namen eingegeben und bearbeitet
    }

    /**
     * @Route ("/veranstaltung", name="app_veranstaltung")
     */
    public function Veranstaltungen()
    {
        //hier werden die Namen der Veranstaltungen verwaltet
    }

    /**
     * @Route ("/neue_liste", name="app_neueliste")
     */
    public function NeueListe()
    {
        //hier wird eine neue Liste erstellt mit Datum, Zeit und Personen
    }

    /**
     * @Route ("/list_check", name="app_listcheck")
     */
    public function ListCheck()
    {
        //hier kann man die angelegten Listen abhaken und leute hinzufügen
    }

    /**
     * @Route ("/drucken", name="app_drucken")
     */
    public function Drucken()
    {
        //Druckdialog (PDF)
    }

}