const router = require("express").Router();
const { Appointment, User } = require("../../models");
// const withAuth = require('../../utils/auth');

// CREATE an Appointment
router.post("/", async (req, res) => {
  try {
    const { title, description } = req.body
    const newAppointment = await Appointment.create({
      title,
      description,
      user_id: req.session.user_id
    });
    res.redirect('/profile');
  } catch (err) {
    res.status(500).json(err);
  }
});

// GET all Appointments
router.get("/", async (req, res) => {
  try {

    const appointmentsData = await Appointment.findAll();
    res.status(200).json(appointmentsData);
  } catch (err) {
    res.status(500).json(err);
  }
});

// GET a single Appointment
router.get("/:id", async (req, res) => {
  try {
    const appointmentData = await Appointment.findByPk(req.params.id, {
      include: [
        {
          model: User,
        },
      ],
    });
    if (!appointmentData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });

      return;
    }
    res.status(200).json(appointmentData);
  } catch (err) {
    res.status(500).json(err);
  }
});

// DELETE a Appointment
router.delete("/:id", async (req, res) => {
  try {
    const appointmentData = await Appointment.destroy({
      where: {
        id: req.params.id,
      },
    });

    if (!appointmentData) {
      res
        .status(404)
        .json({ message: "Sorry about that, no records found for this user." });

      return;
    }
    const allAppointments = await Appointment.findAll()
    res.status(200).json(allAppointments);
  } catch (err) {
    res.status(500).json(err);
  }
});
module.exports = router;
